<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateAvalRequest;
use App\Models\Aval;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;

class AvalController extends AppBaseController
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

        return view('avals.index')
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

		$aval = Aval::create($input);

		Flash::message('Aval saved successfully.');

		return redirect(route('avals.index'));
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

		if(empty($aval))
		{
			Flash::error('Aval not found');
			return redirect(route('avals.index'));
		}

		$aval->fill($request->all());
		$aval->save();

		Flash::message('Aval updated successfully.');

		return redirect(route('avals.index'));
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

		Flash::message('Aval deleted successfully.');

		return redirect(route('avals.index'));
	}
}
