<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateAddressRequest;
use App\Models\Address;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use App\Models\Accredited;
use Response;
use Flash;
use Schema;
use Alert;


class AddressController extends AppBaseController
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
		$query = Address::query();

       

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

		$addresses = $query->get();

		return view('addresses.view-addresses')
		->with('addresses', $addresses)
		->with('attributes', $attributes);
		
	}

	/**
	 * Show the form for creating a new Address.
	 *
	 * @return Response
	 */
	public function create()
	{
		$accrediteds = Accredited::find($id);
		$address = $accrediteds->addresses;
        
        if($address->isEmpty)
        {   
           return view('addresses.create');
        }
        else
        {   
          return view('accrediteds.show');
        }
	}

	/**
	 * Store a newly created Address in storage.
	 *
	 * @param CreateAddressRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateAddressRequest $request)
	{
		$input = $request->all();
		$accredited = $request->input('accredited_id');
		$address = Address::create($input);

		Alert::success('Domicilio guardado exitosamente.')->persistent('Cerrar');
		$accrediteds = Accredited::find($accredited);
		$addresses = $accrediteds->addresses;

		return view('addresses.view-addresses')
		->with('addresses', $addresses);
	}

	/**
	 * Display the specified Address.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$address = Address::find($id);

		if(empty($address))
		{
			Flash::error('Address not found');
			return redirect(route('addresses.index'));
		}

		return view('addresses.show')->with('address', $address);
	}

	/**
	 * Show the form for editing the specified Address.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$address = Address::find($id);

		if(empty($address))
		{
			Flash::error('Address not found');
			return redirect(route('addresses.index'));
		}

		return view('addresses.edit')->with('address', $address);
	}

	/**
	 * Update the specified Address in storage.
	 *
	 * @param  int    $id
	 * @param CreateAddressRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateAddressRequest $request)
	{
		/** @var Address $address */
		$address = Address::find($id);

		if(empty($address))
		{
			Flash::error('Address not found');
			return redirect(route('addresses.index'));
		}

		$address->fill($request->all());	
		$address->save();

		Alert::success('Domicilio editado exitosamente.')->persistent('Cerrar');
		
		return redirect(route('addresses.index'));
		
	}

	/**
	 * Remove the specified Address from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var Address $address */
		$address = Address::find($id);

		if(empty($address))
		{
			Flash::error('Address not found');
			return redirect(route('addresses.index'));
		}

		$address->delete();

		Alert::success('Domicilio eliminado exitosamente.')->persistent('Cerrar');

		return redirect(route('addresses.index'));
	}
	

}
