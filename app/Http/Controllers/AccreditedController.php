<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateAccreditedRequest;
use App\Models\Accredited;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;
use Alert;

class AccreditedController extends AppBaseController
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
		$query = Accredited::query();
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

        $accrediteds = $query->get();

        return view('accrediteds.index')
            ->with('accrediteds', $accrediteds)
            ->with('attributes', $attributes);
	}

	/**
	 * Show the form for creating a new Accredited.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('accrediteds.create');
	}

	/**
	 * Store a newly created Accredited in storage.
	 *
	 * @param CreateAccreditedRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateAccreditedRequest $request)
	{
        $input = $request->all();

		$accredited = Accredited::create($input);

		Alert::success('Acreditado creado exitosamente.')->persistent('Cerrar');

		return redirect(route('accrediteds.index'));
	}

	/**
	 * Display the specified Accredited.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$accredited = Accredited::find($id);

		if(empty($accredited))
		{
			Flash::error('Accredited not found');
			return redirect(route('accrediteds.index'));
		}

		return view('accrediteds.show')->with('accredited', $accredited);
	}

	/**
	 * Show the form for editing the specified Accredited.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$accredited = Accredited::find($id);

		if(empty($accredited))
		{
			Flash::error('Accredited not found');
			return redirect(route('accrediteds.index'));
		}

		return view('accrediteds.edit')->with('accredited', $accredited);
	}

	/**
	 * Update the specified Accredited in storage.
	 *
	 * @param  int    $id
	 * @param CreateAccreditedRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateAccreditedRequest $request)
	{
		/** @var Accredited $accredited */
		$accredited = Accredited::find($id);

		if(empty($accredited))
		{
			Flash::error('Accredited not found');
			return redirect(route('accrediteds.index'));
		}

		$accredited->fill($request->all());
		$accredited->save();

		Alert::success('Datos actualizados exitosamente.')->persistent('Cerrar');

		return redirect(route('accrediteds.index'));
	}

	/**
	 * Remove the specified Accredited from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var Accredited $accredited */
		$accredited = Accredited::find($id);

		if(empty($accredited))
		{
			Flash::error('Accredited not found');
			return redirect(route('accrediteds.index'));
		}

		$accredited->delete();

		Alert::success('Acreditado eliminado exitosamente.')->persistent('Cerrar');

		return redirect(route('accrediteds.index'));
	}

	public function addressesAccredited($id)
	{	
		$accrediteds = Accredited::find($id);
		return view ('addresses.create')
		->with('accrediteds', $accrediteds);
		
	}
	
	public function referencesAccredited($id)
	{
		$accrediteds = Accredited::find($id);
		return view ('references.create')
		->with('accrediteds', $accrediteds);
		
	}
	public function avalsAccredited($id)
	{
		$accrediteds = Accredited::find($id);
		return view ('avals.create')
		->with('accrediteds', $accrediteds);
		
	}
	public function microsAccredited($id)
	{
		$accrediteds = Accredited::find($id);
		return view ('micros.create')
		->with('accrediteds', $accrediteds);
		
	}

	public function historiesAccredited($id)
	{
		$accrediteds = Accredited::find($id);
		return view ('histories.create')
		->with('accrediteds', $accrediteds);
		
	}

	public function studiesAccredited($id)
	{
		$accrediteds = Accredited::find($id);
		return view ('studies.create')
		->with('accrediteds', $accrediteds);
		
	}
}
