<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateAddressRequest;
use App\Models\Address;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;

class AddressController extends AppBaseController
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

        return view('addresses.index')
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
		return view('addresses.create');
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

		$address = Address::create($input);

		Flash::message('Address saved successfully.');

		return redirect(route('addresses.index'));
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

		Flash::message('Address updated successfully.');

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

		Flash::message('Address deleted successfully.');

		return redirect(route('addresses.index'));
	}
}