<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateRolesRequest;
use App\Http\Requests\AddPermissionRequest;
use App\Models\Roles;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;
use App\Role;
use App\Permission;
use Alert;

class RolesController extends AppBaseController
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
		$query = Roles::query();
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

		$roles = $query->get();

		return view('roles.index')
		->with('roles', $roles)
		->with('attributes', $attributes);
	}

	/**
	 * Show the form for creating a new Roles.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('roles.create');
	}

	/**
	 * Store a newly created Roles in storage.
	 *
	 * @param CreateRolesRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateRolesRequest $request)
	{
		$input = $request->all();
		$name = str_slug($input['name']);
		$input['name'] = $name;

		$roles = Roles::create($input);

		Alert::success('Rol guardado exitosamente.')->persistent('Cerrar');

		return redirect(route('roles.index'));
	}

	/**
	 * Display the specified Roles.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$roles = Roles::find($id);

		if(empty($roles))
		{
			Flash::error('Roles not found');
			return redirect(route('roles.index'));
		}

		return view('roles.show')->with('roles', $roles);
	}

	/**
	 * Show the form for editing the specified Roles.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$roles = Roles::find($id);

		if(empty($roles))
		{
			Flash::error('Roles not found');
			return redirect(route('roles.index'));
		}

		return view('roles.edit')->with('roles', $roles);
	}

	/**
	 * Update the specified Roles in storage.
	 *
	 * @param  int    $id
	 * @param CreateRolesRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateRolesRequest $request)
	{
		/** @var Roles $roles */
		$roles = Roles::find($id);

		if(empty($roles))
		{
			Flash::error('Roles not found');
			return redirect(route('roles.index'));
		}

		$roles->fill($request->all());
		$roles->save();

		Flash::message('Roles updated successfully.');

		return redirect(route('roles.index'));
	}

	/**
	 * Remove the specified Roles from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var Roles $roles */
		$roles = Roles::find($id);

		if(empty($roles))
		{
			Flash::error('Roles not found');
			return redirect(route('roles.index'));
		}

		$roles->delete();

		Flash::message('Roles deleted successfully.');

		return redirect(route('roles.index'));
	}

	public function addPermission(Request $request)
	{	

		$id_role = $request->input('rol_id');
		$input = $request->all();

		
		foreach ($input['rows'] as $row) {
			$role = Role::find($id_role);
			$id_permission = $row['id'];
			$permission = Permission::find($id_permission);

			$assigmment = $role->attachPermission($permission);
		}
		Alert::success('Se asignaron los permisos al Rol.')->persistent('Cerrar');
		return redirect(route('roles.index'));	

	}

	public function permissionEdit(Request $request)
	{
		$id_role = $request->input('rol_id');

		$input = $request->all();

		
		foreach ($input['rows'] as $row) {
			$role = Role::find($id_role);	
			$id_permission = $row['id'];
			$permission = Permission::find($id_permission);

			$revoke_permission = $role->permissions()->detach($permission);
		}

		Alert::success('Se eliminaron lor permisos al Rol.');
		return redirect(route('roles.index'));

	}


	
}
