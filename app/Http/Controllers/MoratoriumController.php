<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateMoratoriumRequest;
use App\Models\Moratorium;
use App\Models\Payments;
use App\Models\Credits;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;
use Alert;

class MoratoriumController extends AppBaseController
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
		$query = Moratorium::query();
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

        $moratoria = $query->get();

        return view('moratoria.index')
            ->with('moratoria', $moratoria)
            ->with('attributes', $attributes);
	}

	/**
	 * Show the form for creating a new Moratorium.
	 *
	 * @return Response
	 */
	public function create()
	{	
		
		return view('moratoria.create');
		
		
	}

	/**
	 * Store a newly created Moratorium in storage.
	 *
	 * @param CreateMoratoriumRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateMoratoriumRequest $request)
	{
        $input = $request->all();  
        $credit = $request->input('credit_id');
        $moratoria = Moratorium::find($input);
		Alert::success('Moratorio creado exitosamente.')->persistent('Cerrar');	
		$credit = Credits::find($credit);
		$moratoria = $credit->moratoria;		

		return view('moratoria.index')->with('moratoria', $moratoria)
		->with('credit',$credit);


	}

	/**
	 * Display the specified Moratorium.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$moratorium = Moratorium::find($id);

		if(empty($moratorium))
		{
			Flash::error('Moratorium not found');
			return redirect(route('moratoria.index'));
		}

		return view('moratoria.show')->with('moratorium', $moratorium);
	}

	/**
	 * Show the form for editing the specified Moratorium.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$moratorium = Moratorium::find($id);

		if(empty($moratorium))
		{
			Flash::error('Moratorium not found');
			return redirect(route('moratoria.index'));
		}

		return view('moratoria.edit')->with('moratorium', $moratorium);
	}

	/**
	 * Update the specified Moratorium in storage.
	 *
	 * @param  int    $id
	 * @param CreateMoratoriumRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateMoratoriumRequest $request)
	{
		/** @var Moratorium $moratorium */
		$moratorium = Moratorium::find($id);

		if(empty($moratorium))
		{
			Flash::error('Moratorium not found');
			return redirect(route('moratoria.index'));
		}

		$moratorium->fill($request->all());
		$moratorium->save();

		Flash::message('Moratorium updated successfully.');

		return redirect(route('moratoria.index'));
	}

	/**
	 * Remove the specified Moratorium from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var Moratorium $moratorium */
		$moratorium = Moratorium::find($id);

		if(empty($moratorium))
		{
			Flash::error('Moratorium not found');
			return redirect(route('moratoria.index'));
		}

		$moratorium->delete();

		Flash::message('Moratorium deleted successfully.');

		return redirect(route('moratoria.index'));
	}
}
