<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateAccreditedRequest;
use App\Role;
use App\User;
use App\Models\Product;
use App\Models\Accredited;
use App\Models\Branch;
use App\Models\Credits;
use App\Models\Anchoring;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;
use Alert;

class AccreditedController extends AppBaseController
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
		$branches = Branch::lists('nomenclature', 'id');

		$query = Accredited::query();
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

		$accrediteds = $query->get();

		return view('accrediteds.index')
		->with('accrediteds', $accrediteds)
		->with('attributes', $attributes)
		->with('branches', $branches);
	}

	public function prodfunct()
	{
		return view('accrediteds.index');
	}
	

	/**
	 * Show the form for creating a new Accredited.
	 *
	 * @return Response
	 */
	public function create()
	{	
		$users = User::where('type', 'promotor')->get();
		$roles = Role::pluck('name', 'id');
		$branches = Branch::all();
		return view('accrediteds.create')
		->with('users', $users)
		->with('roles', $roles)
		->with('branches', $branches);	

	}

	/**
	 * Store a newly created Accredited in storage.
	 *
	 * @param CreateAccreditedRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateAccreditedRequest $request)
	{
		$input = $request->all();

		$address = strtoupper($request->input('address'));
		$input['address'] = $address;
		$accredited = Accredited::create($input);

		Alert::success('Acreditado creado exitosamente.')->persistent('Cerrar');

		return redirect(route('accrediteds.index'));
	}

	/**
	 * Display the specified Accredited.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$accredited = Accredited::find($id);

		if(empty($accredited))
		{
			Flash::error('Accredited not found');
			return redirect(route('accrediteds.index'));
		}

		return view('accrediteds.show')->with('accredited', $accredited);
	}
	

	/**
	 * Show the form for editing the specified Accredited.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$accredited = Accredited::find($id);

		if(empty($accredited))
		{
			Flash::error('Accredited not found');
			return redirect(route('accrediteds.index'));
		}

		return view('accrediteds.edit')->with('accredited', $accredited);
	}

	/**
	 * Update the specified Accredited in storage.
	 *
	 * @param  int    $id
	 * @param CreateAccreditedRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateAccreditedRequest $request)
	{
		/** @var Accredited $accredited */
		$accredited = Accredited::find($id);
		$address = strtoupper($request->input('address'));
		$input = $request->all();
		$input['address'] = $address;
		
		if(empty($accredited))
		{
			Flash::error('Accredited not found');
			return redirect(route('accrediteds.index'));
		}

		$accredited->fill($input);
		$accredited->save();

		Alert::success('Datos actualizados exitosamente.')->persistent('Cerrar');

		return redirect(route('accrediteds.index'));
	}

	/**
	 * Remove the specified Accredited from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var Accredited $accredited */
		$accredited = Accredited::find($id);

		if(empty($accredited))
		{
			Flash::error('Accredited not found');
			return redirect(route('accrediteds.index'));
		}

		$accredited->delete();

		Alert::success('Acreditado eliminado exitosamente.')->persistent('Cerrar');

		return redirect(route('accrediteds.index'));
	}

	public function addressesAccredited($id)
	{		
		$accrediteds = Accredited::find($id);
		$address = $accrediteds->addresses;

		if ($address->isEmpty()) {
			return view ('addresses.create')
			->with('accrediteds', $accrediteds);
		}
		else
		{	
			Alert::info('Este acreditado ya tiene sus datos domiciliarios en el sistema.');
			return redirect(route('accrediteds.show', [$accrediteds->id])); 
		}	

	}
	
	public function referencesAccredited($id)
	{
		$accrediteds = Accredited::find($id);
		$references = $accrediteds->references;
		if ($references->isEmpty()) {
			return view ('references.create')
			->with('accrediteds', $accrediteds);
		}
		else
		{
			Alert::info('Este acreditado ya tiene su referencia en el sistema.');
			return redirect(route('accrediteds.show', [$accrediteds->id])); 
		}
		
	}
	public function avalsAccredited($id)
	{
		$accrediteds = Accredited::find($id);
		$avals = $accrediteds->avals;
		if ($avals->isEmpty()) {
			return view ('avals.create')
			->with('accrediteds', $accrediteds);
		}
		else
		{
			Alert::info('Este acreditado ya tiene su referencia en el sistema.');
			return redirect(route('accrediteds.show', [$accrediteds->id])); 
		}
		
	}
	public function microsAccredited($id)
	{
		$accrediteds = Accredited::find($id);
		return view ('micros.create')
		->with('accrediteds', $accrediteds);
		
	}

	public function historiesAccredited($id)
	{
		$accrediteds = Accredited::find($id);
		return view ('histories.create')
		->with('accrediteds', $accrediteds);
		
	}

	public function studiesAccredited($id)
	{
		
		$accrediteds = Accredited::find($id);
		$studies = $accrediteds->studies;
		if ($studies->isEmpty()) {
			return view ('studies.create')
			->with('accrediteds', $accrediteds);
		}
		else
		{
			Alert::info('Este acreditado ya tiene su estudio socioeconomico en el sistema.');
			return redirect(route('accrediteds.show', [$accrediteds->id])); 
		}
		
	}

	public function economicAccredited($id)
	{
		$accredited = Accredited::find($id);
		$economicEvaluations = $accredited->economicEvaluations;
		if (Empty($economicEvaluations)) {
			return view ('economicEvaluations.create')
		->with('accredited', $accredited);
		}
		else
		{
			Alert::info('Este acreditado ya tiene su referencia en el sistema.');
			return redirect(route('accrediteds.show', [$accrediteds->id])); 
		}
		
		
	}

	public function creditsAccredited($id, $product)
	{	
		$product = Product::find($product);
		$accredited = Accredited::find($id);
		$credits = $accredited->credits;
		$aval = $accredited->avals;
		$address = $accredited->addresses;
		$micros = $accredited->micros;
		$study = $accredited->studies;
		$references = $accredited->references;
		$economic = $accredited->economic;
		$anchoring = Anchoring::all();

		if ($aval->count() == 0 or $address->count() == 0 or $micros->count() == 0 or $study->count() == 0 or $references->count() == 0 or is_null($economic)) {
			Alert::error('Este acreditado no cuenta con los datos registrados para la solicitud de un prestamo')->persistent('Cerrar');
			return redirect('allacrediteds');
		}elseif ($credits->count() == 3) {
			Alert::error('Este acreditado ya cuenta con tres prestamos')->persistent('Cerrar');
			return redirect('allacrediteds');
		}elseif ($anchoring->count() == 0) {
			Alert::error('Actualmente no se cuenta con Fondeo')->persistent('Cerrar');
			return redirect('allacrediteds');
		}
		else{
			return view ('credits.create')
			->with('credits',$credits)
			->with('product', $product)
			->with('accredited', $accredited)
			->with('aval', $aval)
			->with('address', $address)
			->with('micros', $micros)
			->with('studies', $study)
			->with('references', $references)
			->with('economic', $economic)
			->with('anchoring', $anchoring);
		}
	}

	public function creditsCuotaAccredited($id)
	{
		$accrediteds = Accredited::find($id);
		return view ('credits.create-cuota')
		->with('accrediteds', $accrediteds);		
	}
}
