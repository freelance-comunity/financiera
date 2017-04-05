<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateUserRequest;
use App\User;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;
use Hash;

class UserController extends AppBaseController
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
		$query = User::query();
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

        $users = $query->get();

        return view('users.index')
            ->with('users', $users)
            ->with('attributes', $attributes);
	}

	/**
	 * Show the form for creating a new User.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('users.create');
	}

	/**
	 * Store a newly created User in storage.
	 *
	 * @param CreateUserRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateUserRequest $request)
	{
        $input = $request->all();
        $password = Hash::make($request->input('password'));
        $input['password'] = $password;
		$user = User::create($input);

		Flash::message('Usuario saved successfully.');

		return redirect(route('users.index'));
		
	}

	/**
	 * Display the specified User.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$user = User::find($id);

		if(empty($user))
		{
			Flash::error('Employee not found');
			return redirect(route('employees.index'));
		}

		return view('users.show')->with('user', $user);
	}

	/**
	 * Show the form for editing the specified User.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::find($id);

		if(empty($user))
		{
			Flash::error('Employee not found');
			return redirect(route('employees.index'));
		}

		return view('users.edit')->with('user', $user);
	}

	/**
	 * Update the specified Employee in storage.
	 *
	 * @param  int    $id
	 * @param CreateEmployeeRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateUserRequest $request)
	{
		/** @var User $user */
		$user = User::find($id);

		if(empty($user))
		{
			Flash::error('Employee not found');
			return redirect(route('users.index'));
		}

		$user->fill($request->all());
		$user->save();

		Flash::message('Employee updated successfully.');

		return redirect(route('users.index'));
	}

	/**
	 * Remove the specified Employee from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var User $user */
		$user = User::find($id);

		if(empty($user))
		{
			Flash::error('user not found');
			return redirect(route('users.index'));
		}

		$user->delete();

		Flash::message('Employee deleted successfully.');

		return redirect(route('users.index'));
	}
}
