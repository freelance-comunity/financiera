<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateCreditsRequest;
use App\Models\Credits;
use App\Models\Accredited;
use App\Models\Aval;
use App\Models\Address;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;

class CreditsController extends AppBaseController
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

        return view('credits.show')
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
		$credits = Credits::create($input);
		Flash::message('Credits saved successfully.');
		$accrediteds = Accredited::find($accredited);
		$credits = $accrediteds->credits;
		return redirect(route('credits.index'));
		
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

		return view('credits.show')->with('credits', $credits);
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

		if(empty($credits))
		{
			Flash::error('Credits not found');
			return redirect(route('credits.index'));
		}

		$credits->fill($request->all());
		$credits->save();

		Flash::message('Credits updated successfully.');

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

		Flash::message('Credits deleted successfully.');

		return redirect(route('credits.index'));
	}
}
