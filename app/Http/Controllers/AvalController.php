<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateAvalRequest;
use App\Models\Aval;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;
use Alert;
use App\Models\Accredited;

class AvalController extends AppBaseController
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
		$query = Aval::query();
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

		$avals = $query->get();

		return view('avals.view-avals')
		->with('avals', $avals)
		->with('attributes', $attributes);
	}

	/**
	 * Show the form for creating a new Aval.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('avals.create');
	}

	/**
	 * Store a newly created Aval in storage.
	 *
	 * @param CreateAvalRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateAvalRequest $request)
	{
		$input = $request->all();
		$accredited = $request->input('accredited_id');
		$accrediteds = Accredited::find($accredited);
		$address = strtoupper($request->input('address'));

		if (strcmp($accrediteds->address, $address) == 0) {
			Alert::error('La dirección del Aval es identica a la del acreditado.')->persistent('Cerrar');
			return redirect()->back()->withInput($request->all());
		}else{
			$aval = Aval::create($input);

			Alert::success('Aval guardado exitosamente.')->persistent('Cerrar');
			$accrediteds = Accredited::find($accredited);
			$avals = $accrediteds->avals;

			return redirect(route('accrediteds.show',  [$accrediteds->id]));
		}
	}

	/**
	 * Display the specified Aval.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$aval = Aval::find($id);

		if(empty($aval))
		{
			Flash::error('Aval not found');
			return redirect(route('avals.index'));
		}

		return view('avals.show')->with('aval', $aval);
	}

	/**
	 * Show the form for editing the specified Aval.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$aval = Aval::find($id);

		if(empty($aval))
		{
			Flash::error('Aval not found');
			return redirect(route('avals.index'));
		}

		return view('avals.edit')->with('aval', $aval);
	}

	/**
	 * Update the specified Aval in storage.
	 *
	 * @param  int    $id
	 * @param CreateAvalRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateAvalRequest $request)
	{
		/** @var Aval $aval */
		$aval = Aval::find($id);
		$accredited = $aval->accredited_id;
		$accrediteds = Accredited::find($accredited);
		$address = strtoupper($request->input('address'));

		if(empty($aval))
		{
			Flash::error('Aval not found');
			return redirect(route('avals.index'));
		}

		if (strcmp($accrediteds->address, $address) == 0) {
			Alert::error('La dirección del Aval es identica a la del acreditado.')->persistent('Cerrar');
			return redirect()->back()->withInput($request->all());
		}else{
			$aval->fill($request->all());
			$aval->save();

			Alert::success('Datos acutalizados exitosamente.')->persistent('Cerrar');

			return redirect(route('accrediteds.index'));
		}
	}

	/**
	 * Remove the specified Aval from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var Aval $aval */
		$aval = Aval::find($id);

		if(empty($aval))
		{
			Flash::error('Aval not found');
			return redirect(route('avals.index'));
		}

		$aval->delete();

		Alert::success('Aval eliminado exitosamente.')->persistent('Cerrar');

		return redirect(route('avals.index'));
	}

	public function editAval($id)
	{
		$aval = Aval::find($id);

		if(empty($aval))
		{
			Flash::error('Aval not found');
			return redirect(route('avals.index'));
		}

		return view('avals.editAval')->with('aval', $aval);
	}
}
