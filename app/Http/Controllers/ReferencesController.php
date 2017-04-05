<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateReferencesRequest;
use App\Models\References;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;

class ReferencesController extends AppBaseController
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
		$query = References::query();
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

        $references = $query->get();

        return view('references.index')
            ->with('references', $references)
            ->with('attributes', $attributes);
	}

	/**
	 * Show the form for creating a new References.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('references.create');
	}

	/**
	 * Store a newly created References in storage.
	 *
	 * @param CreateReferencesRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateReferencesRequest $request)
	{
        $input = $request->all();

		$references = References::create($input);

		Flash::message('References saved successfully.');

		return redirect(route('references.index'));
	}

	/**
	 * Display the specified References.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$references = References::find($id);

		if(empty($references))
		{
			Flash::error('References not found');
			return redirect(route('references.index'));
		}

		return view('references.show')->with('references', $references);
	}

	/**
	 * Show the form for editing the specified References.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$references = References::find($id);

		if(empty($references))
		{
			Flash::error('References not found');
			return redirect(route('references.index'));
		}

		return view('references.edit')->with('references', $references);
	}

	/**
	 * Update the specified References in storage.
	 *
	 * @param  int    $id
	 * @param CreateReferencesRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateReferencesRequest $request)
	{
		/** @var References $references */
		$references = References::find($id);

		if(empty($references))
		{
			Flash::error('References not found');
			return redirect(route('references.index'));
		}

		$references->fill($request->all());
		$references->save();

		Flash::message('References updated successfully.');

		return redirect(route('references.index'));
	}

	/**
	 * Remove the specified References from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var References $references */
		$references = References::find($id);

		if(empty($references))
		{
			Flash::error('References not found');
			return redirect(route('references.index'));
		}

		$references->delete();

		Flash::message('References deleted successfully.');

		return redirect(route('references.index'));
	}
}
