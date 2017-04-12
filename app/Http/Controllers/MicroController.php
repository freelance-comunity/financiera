<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateMicroRequest;
use App\Models\Micro;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;
use Alert;
use App\Models\Accredited;

class MicroController extends AppBaseController
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
	}
	
	public function index(Request $request)
	{
		$query = Micro::query();
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

		$micros = $query->get();

		return view('micros.view-micros')
		->with('micros', $micros)
		->with('attributes', $attributes);
	}

	/**
	 * Show the form for creating a new Micro.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('micros.create');
	}

	/**
	 * Store a newly created Micro in storage.
	 *
	 * @param CreateMicroRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateMicroRequest $request)
	{
		$input = $request->all();
		$accredited = $request->input('accredited_id');
		$micro = Micro::create($input);

		Alert::success('Datos guardados exitosamente.')->persistent('Cerrar');

		$accrediteds = Accredited::find($accredited);
		$micros = $accrediteds->micros;

		return view('micros.view-micros')
		->with('micros', $micros);
	}

	/**
	 * Display the specified Micro.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$micro = Micro::find($id);

		if(empty($micro))
		{
			Flash::error('Micro not found');
			return redirect(route('micros.index'));
		}

		return view('micros.show')->with('micro', $micro);
	}

	/**
	 * Show the form for editing the specified Micro.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$micro = Micro::find($id);

		if(empty($micro))
		{
			Flash::error('Micro not found');
			return redirect(route('micros.index'));
		}

		return view('micros.edit')->with('micro', $micro);
	}

	/**
	 * Update the specified Micro in storage.
	 *
	 * @param  int    $id
	 * @param CreateMicroRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateMicroRequest $request)
	{
		/** @var Micro $micro */
		$micro = Micro::find($id);

		if(empty($micro))
		{
			Flash::error('Micro not found');
			return redirect(route('micros.index'));
		}

		$micro->fill($request->all());
		$micro->save();

		Alert::success('Datos editados exitosamente.')->persistent('Cerrar');

		return redirect(route('micros.index'));
	}

	/**
	 * Remove the specified Micro from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var Micro $micro */
		$micro = Micro::find($id);

		if(empty($micro))
		{
			Flash::error('Micro not found');
			return redirect(route('micros.index'));
		}

		$micro->delete();

		Alert::success('Datos eliminados exitosamente.')->persistent('Cerrar');

		return redirect(route('micros.index'));
	}

	public function editMicros($id)
	{
		$micro = Micro::find($id);

		if(empty($micro))
		{
			Flash::error('Micro not found');
			return redirect(route('micros.index'));
		}

		return view('micros.editMicros')->with('micro', $micro);
	}
}
