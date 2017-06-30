<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateCondonationRequest;
use App\Models\Condonation;
use App\Models\Payments;
use App\Models\Credits;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;
use Alert;

class CondonationController extends AppBaseController
{

	/**
	 * Display a listing of the Post.
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$query = Condonation::query();
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

		$condonations = $query->get();

		return view('condonations.index')
		->with('condonations', $condonations)
		->with('attributes', $attributes);
	}

	/**
	 * Show the form for creating a new Condonation.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('condonations.create');
	}

	/**
	 * Store a newly created Condonation in storage.
	 *
	 * @param CreateCondonationRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateCondonationRequest $request)
	{
		$input = $request->all();
		
		$credits = $request->input('credits_id');	
		$condonation = Condonation::create($input);
		Alert::success('Condonación creada correctamente')->persistent('Cerrar');
		$credits = Credits::find($credits);
		$condonation = $credits->condonation;	
		return redirect(route('condonations.index'));
	}

	/**
	 * Display the specified Condonation.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$condonation = Condonation::find($id);

		if(empty($condonation))
		{
			Flash::error('Condonation not found');
			return redirect(route('condonations.index'));
		}

		return view('condonations.show')->with('condonation', $condonation);
	}

	/**
	 * Show the form for editing the specified Condonation.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$condonation = Condonation::find($id);

		if(empty($condonation))
		{
			Alert::success('Condonación creada correctamente')->persistent('Cerrar');
			return redirect(route('condonations.index'));
		}

		return view('condonations.edit')->with('condonation', $condonation);
	}

	/**
	 * Update the specified Condonation in storage.
	 *
	 * @param  int    $id
	 * @param CreateCondonationRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateCondonationRequest $request)
	{
		/** @var Condonation $condonation */
		$condonation = Condonation::find($id);

		if(empty($condonation))
		{
			Flash::error('Condonation not found');
			return redirect(route('condonations.index'));
		}

		$condonation->fill($request->all());
		$condonation->save();

		Flash::message('Condonation updated successfully.');

		return redirect(route('condonations.index'));
	}

	/**
	 * Remove the specified Condonation from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var Condonation $condonation */
		$condonation = Condonation::find($id);

		if(empty($condonation))
		{
			Flash::error('Condonation not found');
			return redirect(route('condonations.index'));
		}

		$condonation->delete();

		Flash::message('Condonation deleted successfully.');

		return redirect(route('condonations.index'));
	}
	
}
