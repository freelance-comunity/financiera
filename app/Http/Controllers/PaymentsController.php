<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreatePaymentsRequest;
use App\Models\Payments;
use App\Models\Debt;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;
use Alert;

class PaymentsController extends AppBaseController
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
		$query = Payments::query();
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

		$payments = $query->get();

		return view('payments.index')
		->with('payments', $payments)
		->with('attributes', $attributes);
	}

	/**
	 * Show the form for creating a new Payments.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('payments.create');
	}

	/**
	 * Store a newly created Payments in storage.
	 *
	 * @param CreatePaymentsRequest $request
	 *
	 * @return Response
	 */
	public function store(CreatePaymentsRequest $request)
	{
		$input = $request->all();

		$payments = Payments::create($input);

		Flash::message('Payments saved successfully.');

		return redirect(route('payments.index'));
	}

	/**
	 * Display the specified Payments.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$payments = Payments::find($id);

		if(empty($payments))
		{
			Flash::error('Payments not found');
			return redirect(route('payments.index'));
		}

		return view('payments.show')->with('payments', $payments);
	}

	/**
	 * Show the form for editing the specified Payments.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$payments = Payments::find($id);

		if(empty($payments))
		{
			Flash::error('Payments not found');
			return redirect(route('payments.index'));
		}

		return view('payments.edit')->with('payments', $payments);
	}

	/**
	 * Update the specified Payments in storage.
	 *
	 * @param  int    $id
	 * @param CreatePaymentsRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreatePaymentsRequest $request)
	{
		/** @var Payments $payments */
		$payments = Payments::find($id);

		if(empty($payments))
		{
			Flash::error('Payments not found');
			return redirect(route('payments.index'));
		}

		$payments->fill($request->all());
		$payments->save();

		Flash::message('Payments updated successfully.');

		return redirect(route('payments.index'));
	}

	/**
	 * Remove the specified Payments from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var Payments $payments */
		$payments = Payments::find($id);

		if(empty($payments))
		{
			Flash::error('Payments not found');
			return redirect(route('payments.index'));
		}

		$payments->delete();

		Flash::message('Payments deleted successfully.');

		return redirect(route('payments.index'));
	}

	public function pay($id)
	{
		$payments = Payments::find($id);
		$debt = Debt::find($payments->debt->id);

		$payments->status = "Pagado";
		$payments->save();

		$debt->ammount = $debt->ammount - $payments->ammount;
		$debt->save();

		Alert::success('Pago realizado exitosamente')->persistent('Cerrar');
		return redirect()->back();
	}
}
