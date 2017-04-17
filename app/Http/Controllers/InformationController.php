<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateInformationRequest;
use App\Models\Information;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;
use Image;
use Alert;

class InformationController extends AppBaseController
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
		$query = Information::query();
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

		$information = $query->get();

		return view('information.index')
		->with('information', $information)
		->with('attributes', $attributes);
	}

	/**
	 * Show the form for creating a new Information.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('information.create');
	}

	/**
	 * Store a newly created Information in storage.
	 *
	 * @param CreateInformationRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateInformationRequest $request)
	{
		$input = $request->all();
		if ($request->hasFile('logo')) {
			$logo = $request->file('logo');
			$filename = time() . '.' . $logo->getClientOriginalExtension();
			Image::make($logo)->resize(300, 300)->save(public_path('/img/uploads/' . $filename));

			$input['logo'] = $filename;
		}

		$information = Information::create($input);

		Alert::success('Datos de la compañia guardados exitosamente.');

		return view('information.show')->with('information', $information);
	}

	/**
	 * Display the specified Information.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$information = Information::find($id);

		if(empty($information))
		{
			Flash::error('Information not found');
			return redirect(route('information.index'));
		}

		return view('information.show')->with('information', $information);
	}

	/**
	 * Show the form for editing the specified Information.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$information = Information::find($id);

		if(empty($information))
		{
			Flash::error('Information not found');
			return redirect(route('information.index'));
		}

		return view('information.edit')->with('information', $information);
	}

	/**
	 * Update the specified Information in storage.
	 *
	 * @param  int    $id
	 * @param CreateInformationRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateInformationRequest $request)
	{
		/** @var Information $information */
		$information = Information::find($id);
		$input = $request->all();

		if ($request->hasFile('logo')) {
			$logo = $request->file('logo');
			$filename = time() . '.' . $logo->getClientOriginalExtension();
			Image::make($logo)->resize(300, 300)->save(public_path('/img/uploads/' . $filename));

			$input['logo'] = $filename;
		}
		if(empty($information))
		{
			Flash::error('Information not found');
			return redirect(route('information.index'));
		}

		$information->fill($input);
		$information->save();

		Alert::message('Información actualizada exitosamente.');

		return view('information.show')->with('information', $information);
	}

	/**
	 * Remove the specified Information from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var Information $information */
		$information = Information::find($id);

		if(empty($information))
		{
			Flash::error('Information not found');
			return redirect(route('information.index'));
		}

		$information->delete();

		Flash::message('Information deleted successfully.');

		return redirect(route('information.index'));
	}
}
