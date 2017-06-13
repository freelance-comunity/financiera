<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateCreditsRequest;
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

		$accredited = Accredited::find($credits->accredited_id);
		$user = $accredited->user;

		$status = $credits->status;
		$frequency = $credits->frequency_payment;
		$days = $credits->days;
		$amount = $credits->authorized_amount;
		$interest = $credits->interest;
		$months = $credits->sequence;
		$f = (($amount*$interest)+($amount/$months))/$days;
		$date = new Carbon($credits->date_ministration);
		$holidays = Holidays::all();

		if ($status == 'Ministrado' and $frequency == "Diario" ) {
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
		}elseif ($status == 'Ministrado' && $frequency == 'Diario cuota') {
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
