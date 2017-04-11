<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateAnchoringRequest;
use App\Models\Anchoring;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;
use Alert;

class AnchoringController extends AppBaseController
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
		$query = Anchoring::query();
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

        $anchorings = $query->get();

        return view('anchorings.index')
            ->with('anchorings', $anchorings)
            ->with('attributes', $attributes);
	}

	/**
	 * Show the form for creating a new Anchoring.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('anchorings.create');
	}

	/**
	 * Store a newly created Anchoring in storage.
	 *
	 * @param CreateAnchoringRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateAnchoringRequest $request)
	{
        $input = $request->all();
        
		$anchoring = Anchoring::create($input);

		Alert::success('Fondeo guardado exitosamente.')->persistent('Cerrar');

		return redirect(route('anchorings.index'));

	}

	/**
	 * Display the specified Anchoring.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$anchoring = Anchoring::find($id);

		if(empty($anchoring))
		{
			Flash::error('Anchoring not found');
			return redirect(route('anchorings.index'));
		}

		return view('anchorings.show')->with('anchoring', $anchoring);
	}

	/**
	 * Show the form for editing the specified Anchoring.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$anchoring = Anchoring::find($id);

		if(empty($anchoring))
		{
			Flash::error('Anchoring not found');
			return redirect(route('anchorings.index'));
		}

		return view('anchorings.edit')->with('anchoring', $anchoring);
	}

	/**
	 * Update the specified Anchoring in storage.
	 *
	 * @param  int    $id
	 * @param CreateAnchoringRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateAnchoringRequest $request)
	{
		/** @var Anchoring $anchoring */
		$anchoring = Anchoring::find($id);

		if(empty($anchoring))
		{
			Flash::error('Anchoring not found');
			return redirect(route('anchorings.index'));
		}

		$anchoring->fill($request->all());
		$anchoring->save();

		Alert::message('Fondeo actualizado exitosamente.')->persistent('Cerrar');

		return redirect(route('anchorings.index'));
	}

	/**
	 * Remove the specified Anchoring from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var Anchoring $anchoring */
		$anchoring = Anchoring::find($id);

		if(empty($anchoring))
		{
			Flash::error('Anchoring not found');
			return redirect(route('anchorings.index'));
		}

		$anchoring->delete();

		Flash::message('Anchoring deleted successfully.');

		return redirect(route('anchorings.index'));
	}
}
