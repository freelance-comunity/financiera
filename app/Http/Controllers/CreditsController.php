<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateCreditsRequest;
use App\Http\Requests\EditCreditsRequest;
use App\Models\Credits;
use App\Models\Accredited;
use App\Models\Aval;
use App\Models\Product;
use App\Models\Anchoring;
use App\Models\Address;
use App\Models\Debt;
use App\Models\Payments;
use App\Models\Holidays;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;
use Alert;
use Carbon\Carbon;


class CreditsController extends AppBaseController
{

	/**
	 * Display a listing of the Post.
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */

	public function __construct()
	{
		$this->middleware('auth');
		$this->middleware('lock');
		$this->middleware('is_admin');
	}

	public function index(Request $request)
	{
		$query = Credits::query();

		$columns = Schema::getColumnListing('$TABLE_NAME$');
		$attributes = array();

		foreach($columns as $attribute){
			if($request[$attribute] == true)
			{
				$query->where($attribute, $request[$attribute]);
				$attributes[$attribute] =  $request[$attribute];
			}else{
				$attributes[$attribute] =  null;
			}
		};

		$credits = $query->get();

		return view('credits.view-credits')
		->with('credits', $credits)
		->with('attributes', $attributes);
	}

	/**
	 * Show the form for creating a new Credits.
	 *
	 * @return Response
	 */
	public function create()
	{	
		$accredited = Accredited::all();
		$addreses = Address::all();
		$avals = Aval::all();
		return view('credits.create')
		->with('accredited', $accredited)
		->with('addresses', $addresses)
		->with('avals', $avals);
		
	}

	/**
	 * Store a newly created Credits in storage.
	 *
	 * @param CreateCreditsRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateCreditsRequest $request)
	{	
		$input = $request->all();
		$accredited = $request->input('accredited_id');
		$accrediteds = Accredited::find($accredited);
		$product = Product::find($request->input('type_product'));
		$anchorings = Anchoring::select('amount_resource','id')->first();
		if ($request->input('term') > $product->maximum_term) {
			Alert::error('El plazo máximo en días ha sido rebasado')->persistent('Cerrar');			
			return redirect()->back()->withInput($request->all());		
		}elseif ($request->input('amount_requested') > $product->maximum_amount) {
			Alert::error('El monto solicitado máximo es de $15000')->persistent('Cerrar');			
			return redirect()->back()->withInput($request->all());
		}elseif ($request->input('amount_requested') < $product->minimum_amount) {
			Alert::error('El monto solicitado mínimo es de $1000')->persistent('Cerrar');			
			return redirect()->back()->withInput($request->all());
		}
		elseif ($request->input('authorized_amount') > $product->maximum_amount) {
			Alert::error('El monto autorizado máximo es de $15000')->persistent('Cerrar');			
			return redirect()->back()->withInput($request->all());
		}elseif ($request->input('amount_requested') > $anchorings->amount_resource) {
			Alert::error('No cuentas con fondos suficientes')->persistent('Cerrar');			
			return redirect()->back()->withInput($request->all());
		}
		/*elseif ($request->input('authorized_amount') < $product->minimum_amount) {
			Alert::error('El monto autorizado mínimo es de $1000')->persistent('Cerrar');			
			return redirect()->back()->withInput($request->all());
		}*/

		else{
			$credits = Credits::create($input);		
			Alert::success('Prestamo guardado exitosamente.')->persistent('Cerrar');
			$accrediteds = Accredited::find($accredited);
			$credits = $accrediteds->credits;
			return view('credits.show')
			->with('credits', $credits);
		}	
	}

	/**
	 * Display the specified Credits.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$credits = Credits::find($id);

		if(empty($credits))
		{
			Flash::error('Credits not found');
			return redirect(route('credits.index'));
		}

		return view('credits.credit')->with('credits', $credits);
	}

	/**
	 * Show the form for editing the specified Credits.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$credits = Credits::find($id);

		if(empty($credits))
		{
			Flash::error('Credits not found');
			return redirect(route('credits.index'));
		}

		return view('credits.edit')->with('credits', $credits);
	}
	public function editCredits($id)
	{
		$credits = Credits::find($id);

		if(empty($credits))
		{
			Flash::error('Credits not found');
			return redirect(route('credits.index'));
		}

		return view('credits.editCredits')->with('credits', $credits);
	}
	/**
	 * Update the specified Credits in storage.
	 *
	 * @param  int    $id
	 * @param CreateCreditsRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateCreditsRequest $request)
	{
		/** @var Credits $credits */
		$credits = Credits::find($id);
		/*$status = $request->input('status');*/
		if(empty($credits))
		{
			Flash::error('Credits not found');
			return redirect(route('credits.index'));
		}

		$credits->fill($request->all());
		$credits->save();
		
		if ($credits->status == 'Ministrado') {

			$accredited = Accredited::find($credits->accredited_id);
			$user = $accredited->user;

			$status = $credits->status;
			$frequency = $credits->frequency_payment;
			$days = $credits->days;
			$amount = $credits->authorized_amount;
			if ($frequency == "Mensual") {
				$interest = $credits->interest;
			}
			elseif ($frequency == "Semanal") {
				$interest = $credits->interest;
			}elseif ($frequency == 'Catorcenal') {
				$interest = $credits->interest;	
			}
			elseif ($frequency == 'Quincenal') {
				$interest = $credits->interest;
			}
			else{
				$interest = ($credits->interest)*1.16;				
			}
			$months = $credits->sequence;
			$f = (($amount*$interest)+($amount/$months))/$days;
			$date = new Carbon($credits->date_ministration);
			$holidays = Holidays::all();



			if ($status == 'Ministrado' and $frequency == "Diario" ) {
				$anchoring = Anchoring::select('amount_resource','id')->first();
				$newAmount = $anchoring->amount_resource - $credits->authorized_amount;
				$newAnchoring = Anchoring::find($anchoring->id);
				$newAnchoring->amount_resource = $newAmount;
				$newAnchoring->save();
				$debt = new Debt;
				$debt->ammount = $credits->authorized_amount;
				$debt->status = "Pendiente";
				$debt->credits_id = $credits->id;
				$debt->save();

				for ($i=1; $i <= $credits->term; $i++) { 
					$var = $date->addDay();

					$fechaPago[$i] = $date->toDateString();
					$payment = new Payments;
					$payment->number = $i;
					$payment->ammount = ceil($f);
					$payment->surcharge = '0';
					$payment->total = ceil($f) + 0; 
					$payment->status = "Pendiente";
					foreach ($holidays as $value) {
						if ($value->date == $fechaPago[$i]){
							$date->addDay();
							$fechaPago[$i] = $date->toDateString();

						}
					}
					$payment->payment_date = $var;
					$payment->debt_id = $debt->id;
					$payment->user_id = $user->id;
					$payment->branch_id = $user->branch_id;
					$payment->save();

				}
			}
			elseif ($status == 'Ministrado' and $frequency == 'Diario cuota') 
			{
				$anchoring = Anchoring::select('amount_resource','id')->first();
				$newAmount = $anchoring->amount_resource - $credits->authorized_amount;
				$newAnchoring = Anchoring::find($anchoring->id);
				$newAnchoring->amount_resource = $newAmount;
				$newAnchoring->save();
				$debt = new Debt;
				$debt->ammount = $credits->authorized_amount;
				$debt->status = "Pendiente";
				$debt->credits_id = $credits->id;
				$debt->save();
				for ($i=1; $i <= $credits->term; $i++) { 
					$var = $date->addDay();
					while ($date->isWeekend())
					{
						$date->addDay(); 
					}
					$fechaPago[$i] = $date->toDateString();
					$payment = new Payments;
					$payment->number = $i;
					$payment->ammount = ceil($f);
					$payment->surcharge = '0';
					$payment->total = ceil($f) + 0; 
					$payment->status = "Pendiente";
					foreach ($holidays as $value) {
						if ($value->date == $fechaPago[$i]){
							$date->addDay()->addWeekDay();
							$fechaPago[$i] = $date->toDateString();

						}
					}
					$payment->payment_date = $var;
					$payment->debt_id = $debt->id;
					$payment->user_id = $user->id;
					$payment->branch_id = $user->branch_id;
					$payment->save();

				}

			}
			elseif ($status == 'Ministrado' and $frequency == 'Mensual') 
			{
				$anchoring = Anchoring::select('amount_resource','id')->first();
				$newAmount = $anchoring->amount_resource - $credits->authorized_amount;
				$newAnchoring = Anchoring::find($anchoring->id);
				$newAnchoring->amount_resource = $newAmount;
				$newAnchoring->save();
				$debt = new Debt;
				$debt->ammount = $credits->authorized_amount;
				$debt->status = "Pendiente";
				$debt->credits_id = $credits->id;
				$debt->save();
				for ($i=1; $i <= $credits->term; $i++) { 
					$var = $date->addDays(28);

					$fechaPago[$i] = $date->toDateString();
					$payment = new Payments;
					$payment->number = $i;
					$payment->ammount = ceil($f);
					$payment->surcharge = '0';
					$payment->total = ceil($f) + 0; 
					$payment->status = "Pendiente";
					foreach ($holidays as $value) {
						if ($value->date == $fechaPago[$i]){
							$date->addDay();
							$fechaPago[$i] = $date->toDateString();

						}
					}
					$payment->payment_date = $var;
					$payment->debt_id = $debt->id;
					$payment->user_id = $user->id;
					$payment->branch_id = $user->branch_id;
					$payment->save();

				}

			}
			elseif ($status == 'Ministrado' and $frequency == 'Semanal') 
			{
				$anchoring = Anchoring::select('amount_resource','id')->first();
				$newAmount = $anchoring->amount_resource - $credits->authorized_amount;
				$newAnchoring = Anchoring::find($anchoring->id);
				$newAnchoring->amount_resource = $newAmount;
				$newAnchoring->save();
				$debt = new Debt;
				$debt->ammount = $credits->authorized_amount;
				$debt->status = "Pendiente";
				$debt->credits_id = $credits->id;
				$debt->save();
				for ($i=1; $i <= $credits->term; $i++) { 
					$var = $date->addWeek();

					$fechaPago[$i] = $date->toDateString();
					$payment = new Payments;
					$payment->number = $i;
					$payment->ammount = ceil($f);
					$payment->surcharge = '0';
					$payment->total = ceil($f) + 0; 
					$payment->status = "Pendiente";
					foreach ($holidays as $value) {
						if ($value->date == $fechaPago[$i]){
							$date->addDay();
							$fechaPago[$i] = $date->toDateString();

						}
					}
					$payment->payment_date = $var;
					$payment->debt_id = $debt->id;
					$payment->user_id = $user->id;
					$payment->branch_id = $user->branch_id;
					$payment->save();

				}

			}
			elseif ($status == 'Ministrado' and $frequency == 'Catorcenal') {
				$anchoring = Anchoring::select('amount_resource','id')->first();
				$newAmount = $anchoring->amount_resource - $credits->authorized_amount;
				$newAnchoring = Anchoring::find($anchoring->id);
				$newAnchoring->amount_resource = $newAmount;
				$newAnchoring->save();
				$debt = new Debt;
				$debt->ammount = $credits->authorized_amount;
				$debt->status = "Pendiente";
				$debt->credits_id = $credits->id;
				$debt->save();

				for ($i=1; $i <= $credits->term; $i++) { 
					$var = $date->addDays(14);

					$fechaPago[$i] = $date->toDateString();
					$payment = new Payments;
					$payment->number = $i;
					$payment->ammount = ceil($f);
					$payment->surcharge = '0';
					$payment->total = ceil($f) + 0; 
					$payment->status = "Pendiente";
					foreach ($holidays as $value) {
						if ($value->date == $fechaPago[$i]){
							$date->addDay();
							$fechaPago[$i] = $date->toDateString();

						}
					}
					$payment->payment_date = $var;
					$payment->debt_id = $debt->id;
					$payment->user_id = $user->id;
					$payment->branch_id = $user->branch_id;
					$payment->save();

				}
			}
			elseif ($status == 'Ministrado' and $frequency == 'Quincenal') {
				$anchoring = Anchoring::select('amount_resource','id')->first();
				$newAmount = $anchoring->amount_resource - $credits->authorized_amount;
				$newAnchoring = Anchoring::find($anchoring->id);
				$newAnchoring->amount_resource = $newAmount;
				$newAnchoring->save();
				$debt = new Debt;
				$debt->ammount = $credits->authorized_amount;
				$debt->status = "Pendiente";
				$debt->credits_id = $credits->id;
				$debt->save();

				for ($i=1; $i <= $credits->term; $i++) { 
					$var = $date->addDays(15);

					$fechaPago[$i] = $date->toDateString();
					$payment = new Payments;
					$payment->number = $i;
					$payment->ammount = ceil($f);
					$payment->surcharge = '0';
					$payment->total = ceil($f) + 0; 
					$payment->status = "Pendiente";
					foreach ($holidays as $value) {
						if ($value->date == $fechaPago[$i]){
							$date->addDay();
							$fechaPago[$i] = $date->toDateString();

						}
					}
					$payment->payment_date = $var;
					$payment->debt_id = $debt->id;
					$payment->user_id = $user->id;
					$payment->branch_id = $user->branch_id;
					$payment->save();

				}
			}
		}

		if ($credits->status == 'Cancelar') {
			$anchoring = Anchoring::select('amount_resource','id')->first();
			$newAmount = $anchoring->amount_resource + $credits->authorized_amount;
			$newAnchoring = Anchoring::find($anchoring->id);
			$newAnchoring->amount_resource = $newAmount;
			$newAnchoring->save();

			$debt = Debt::find($id);
			$payments = $debt->payments;
			foreach ($payments as $value) {
				$payment_delete = Payments::find($value->id);
				$payment_delete->delete();
			}
			$debt->delete();

		}

		Alert::success('Datos editados exitosamente.')->persistent('Cerrar');

		return redirect(route('credits.index'));	
	}	




	/**
	 * Remove the specified Credits from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var Credits $credits */
		$credits = Credits::find($id);

		if(empty($credits))
		{
			Flash::error('Credits not found');
			return redirect(route('credits.index'));
		}

		$credits->delete();

		Alert::error('Datos eliminados exitosamente.')->persistent('Cerrar');

		return redirect(route('credits.index'));
	}
	
	public function moratoria($id) 
	{
		$credits = Credits::find($id);
		return view('moratoria.create')
		->with('credits', $credits);		
	}
	
}