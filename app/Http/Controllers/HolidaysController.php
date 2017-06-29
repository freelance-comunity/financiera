<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateHolidaysRequest;
use App\Models\Holidays;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;
use Alert;

class HolidaysController extends AppBaseController
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
		$this->middleware('lock');
		$this->middleware('is_admin');
	}

    public function index(Request $request)
    {
    	$query = Holidays::query();
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

    	$holidays = $query->get();

    	return view('holidays.index')
    	->with('holidays', $holidays)
    	->with('attributes', $attributes);
    }

	/**
	 * Show the form for creating a new Holidays.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('holidays.create');
	}

	/**
	 * Store a newly created Holidays in storage.
	 *
	 * @param CreateHolidaysRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateHolidaysRequest $request)
	{
		$input = $request->all();

		$holidays = Holidays::create($input);

		Alert::success('Día inhabil guardado exitosamente')->persistent('Cerrar');

		return redirect(route('holidays.index'));
	}

	/**
	 * Display the specified Holidays.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$holidays = Holidays::find($id);

		if(empty($holidays))
		{
			Flash::error('Holidays not found');
			return redirect(route('holidays.index'));
		}

		return view('holidays.show')->with('holidays', $holidays);
	}

	/**
	 * Show the form for editing the specified Holidays.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$holidays = Holidays::find($id);

		if(empty($holidays))
		{
			Flash::error('Holidays not found');
			return redirect(route('holidays.index'));
		}

		return view('holidays.edit')->with('holidays', $holidays);
	}

	/**
	 * Update the specified Holidays in storage.
	 *
	 * @param  int    $id
	 * @param CreateHolidaysRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateHolidaysRequest $request)
	{
		/** @var Holidays $holidays */
		$holidays = Holidays::find($id);

		if(empty($holidays))
		{
			Flash::error('Holidays not found');
			return redirect(route('holidays.index'));
		}

		$holidays->fill($request->all());
		$holidays->save();

		Alert::info('Fecha actualizada del calendario de operaciones.');

		return redirect(route('holidays.index'));
	}

	/**
	 * Remove the specified Holidays from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var Holidays $holidays */
		$holidays = Holidays::find($id);

		if(empty($holidays))
		{
			Flash::error('Holidays not found');
			return redirect(route('holidays.index'));
		}

		$holidays->delete();

		Alert::info('Fecha eliminada del calendario de operaciones.');

		return redirect(route('holidays.index'));
	}
}
