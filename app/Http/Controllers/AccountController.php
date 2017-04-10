<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateAccountRequest;
use App\Models\Account;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;
use Alert;

class AccountController extends AppBaseController
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
		$query = Account::query();
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

        $accounts = $query->get();

        return view('accounts.index')
            ->with('accounts', $accounts)
            ->with('attributes', $attributes);
	}

	/**
	 * Show the form for creating a new Account.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('accounts.create');
	}

	/**
	 * Store a newly created Account in storage.
	 *
	 * @param CreateAccountRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateAccountRequest $request)
	{
        $input = $request->all();

		$account = Account::create($input);

		Alert::success('Cuenta guardada exitosamente.')->persistent('Cerrar');

		return redirect(route('accounts.index'));
	}

	/**
	 * Display the specified Account.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$account = Account::find($id);

		if(empty($account))
		{
			Alert::error('Cuenta no encontrada');
			return redirect(route('accounts.index'));
		}

		return view('accounts.show')->with('account', $account);
	}

	/**
	 * Show the form for editing the specified Account.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$account = Account::find($id);

		if(empty($account))
		{
			Alert::error('Cuenta no encontrada');
			return redirect(route('accounts.index'));
		}

		return view('accounts.edit')->with('account', $account);
	}

	/**
	 * Update the specified Account in storage.
	 *
	 * @param  int    $id
	 * @param CreateAccountRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateAccountRequest $request)
	{
		/** @var Account $account */
		$account = Account::find($id);

		if(empty($account))
		{
			Alert::error('Cuenta no encontrada');
			return redirect(route('accounts.index'));
		}

		$account->fill($request->all());
		$account->save();

		Alert::success('Cuenta actualizada exitosamente.');

		return redirect(route('accounts.index'));
	}

	/**
	 * Remove the specified Account from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var Account $account */
		$account = Account::find($id);

		if(empty($account))
		{
			Alert::error('Cuenta no encontrada');
			return redirect(route('accounts.index'));
		}

		$account->delete();

		Alert::success('Cuenta eliminada exitosamente.');

		return redirect(route('accounts.index'));
	}
}
