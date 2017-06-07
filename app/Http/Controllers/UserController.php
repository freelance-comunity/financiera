<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\EditUserRequest;
use App\User;
use App\Role;
use App\Models\Branch;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;
use Hash;
use Alert;
use Mail;

class UserController extends AppBaseController
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
	}

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
		$branches = Branch::pluck('nomenclature', 'id');
		return view('users.create')
		->with('roles', $roles)
		->with('branches', $branches);
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

		$password = str_random(8);
		$input['password'] = Hash::make($password);
		$var_roles = $input['position'];

		$position = $input['position'];
		$position = implode(',', $position);
		$input['position'] = $position;

		$usercreate = User::create($input);
		
		foreach ($var_roles as $position) {
			$user = User::find($usercreate->id);
			$role = Role::find($position);
			$user->attachRole($role);
		}
		
		$data['name'] = $request->input('name');
		$data['pass'] = $password;
		$data['email'] = $request->input('email');

		Mail::send('mails.register', ['data' => $data], function($mail) use($data){
			$mail->subject('Te proporcionamos las credenciales de acceso al sistema');
			$mail->to($data['email'], $data['name'], $data['pass']);
		});
		
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
		$roles = Role::pluck('name', 'id');
		$branches = Branch::pluck('nomenclature', 'id');

		if(empty($user))
		{
			Alert::error('Usuario no encontrado en los registros')->persistent('cerrar');
			return redirect(route('users.index'));
		}

		return view('users.edit')
		->with('user', $user)
		->with('roles', $roles)
		->with('branches', $branches);
	}

	/**
	 * Update the specified Employee in storage.
	 *
	 * @param  int    $id
	 * @param CreateEmployeeRequest $request
	 *
	 * @return Response
	 */
	public function update($id, EditUserRequest $request)
	{
		/** @var User $user */
		$input = $request->all();	
		$user = User::find($id);

		if(empty($user))
		{
			Alert::error('Usuario no encontrado en los registros')->persistent('cerrar');
			return redirect(route('users.index'));
		}

		$user->fill($input);
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

	public function updatePassword(Request $request)
	{
		$password = $request->input('password');
		$user = User::find($request->input('user_id'));
		$user->password = Hash::make($password);
		$user->save();

		Alert::success('Contraseña actualizada con éxito');
		return redirect()->back();
	}

	public function myAccrediteds($id)
	{
		$user = User::find($id);
		$accrediteds = $user->accrediteds;
		return view('users.my-accrediteds')
		->with('accrediteds', $accrediteds);
	}

	public function routePayments($id)
	{	
		$user = User::find($id);
		$payments = $user->payments;
		return view('users.route-payments')
		->with('payments', $payments);
	}
}
