<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateStudyRequest;
use App\Models\Study;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;
use Alert;
use App\Models\Accredited;

class StudyController extends AppBaseController
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
		$query = Study::query();
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

		$studies = $query->get();

		return view('studies.view-studies')
		->with('studies', $studies)
		->with('attributes', $attributes);
	}

	/**
	 * Show the form for creating a new Study.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('studies.create');
	}

	/**
	 * Store a newly created Study in storage.
	 *
	 * @param CreateStudyRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateStudyRequest $request)
	{
		$input = $request->all();
		$accredited = $request->input('accredited_id');
		$study = Study::create($input);

		Alert::success('Estudio socioeconomico guardado exitosamente.')->persistent('Cerrar');

		$accrediteds = Accredited::find($accredited);
		$studies = $accrediteds->studies;

		return view('studies.view-studies')
		->with('studies', $studies);
	}

	/**
	 * Display the specified Study.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$study = Study::find($id);

		if(empty($study))
		{
			Flash::error('Study not found');
			return redirect(route('studies.index'));
		}

		return view('studies.show')->with('study', $study);
	}

	/**
	 * Show the form for editing the specified Study.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$study = Study::find($id);

		if(empty($study))
		{
			Flash::error('Study not found');
			return redirect(route('studies.index'));
		}

		return view('studies.edit')->with('study', $study);
	}

	/**
	 * Update the specified Study in storage.
	 *
	 * @param  int    $id
	 * @param CreateStudyRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateStudyRequest $request)
	{
		/** @var Study $study */
		$study = Study::find($id);

		if(empty($study))
		{
			Flash::error('Study not found');
			return redirect(route('studies.index'));
		}

		$study->fill($request->all());
		$study->save();

		Alert::success('Datos actualizados exitosamente.')->persistent('Cerrar');

		return redirect(route('studies.index'));
	}

	/**
	 * Remove the specified Study from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var Study $study */
		$study = Study::find($id);

		if(empty($study))
		{
			Flash::error('Study not found');
			return redirect(route('studies.index'));
		}

		$study->delete();

		Alert::success('Estudio socioeconomico eliminado exitosamente.')->persistent('Cerrar');

		return redirect(route('studies.index'));
	}
	public function editStudies($id)
	{
		$study = Study::find($id);

		if(empty($study))
		{
			Flash::error('Study not found');
			return redirect(route('studies.index'));
		}

		return view('studies.editStudies')->with('study', $study);
	}
}
