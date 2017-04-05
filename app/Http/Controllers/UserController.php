<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateUserRequest;
use App\User;
use App\Role;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;
use Hash;
use Alert;

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
		$roles = Role::pluck('name', 'id');
		return view('users.create')
		->with('roles', $roles);
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
        $role = Role::find($request->input('position'));
        $input['position'] = $role->name;
		$usercreate = User::create($input);
		$user = User::find($usercreate->id);
		$user->attachRole($role);

		Alert::success('Usuario creado exitosamente')->persistent('cerrar');

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
			Alert::error('Usuario no encontrado en los registros')->persistent('cerrar');
			return redirect(route('users.index'));
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
			Alert::error('Usuario no encontrado en los registros')->persistent('cerrar');
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
			Alert::error('Usuario no encontrado en los registros')->persistent('cerrar');
			return redirect(route('users.index'));
		}

		$user->fill($request->all());
		$user->save();

		Alert::success('Usuario actualizado de los registros')->persistent('cerrar');

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
			Alert::error('Usuario no encontrado en los registros')->persistent('cerrar');
			return redirect(route('users.index'));
		}

		$user->delete();

		Alert::info('Usuario eliminado de los registros')->persistent('cerrar');

		return redirect(route('users.index'));
	}
}
