<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreatePermissionRequest;
use App\Models\Permission;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;
use Alert;


class PermissionController extends AppBaseController
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
		$query = Permission::query();
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

        $permissions = $query->get();

        return view('permissions.index')
            ->with('permissions', $permissions)
            ->with('attributes', $attributes);
	}

	/**
	 * Show the form for creating a new Permission.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('permissions.create');
	}

	/**
	 * Store a newly created Permission in storage.
	 *
	 * @param CreatePermissionRequest $request
	 *
	 * @return Response
	 */
	public function store(CreatePermissionRequest $request)
	{
        $input = $request->all();
        $name = str_slug($input['name']);
        $input['name'] = $name;
        
		$permission = Permission::create($input);

		Alert::success('Permiso guardado exitosamente.')->persistent('Cerrar');

		return redirect(route('permissions.index'));
	}

	/**
	 * Display the specified Permission.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$permission = Permission::find($id);

		if(empty($permission))
		{
			Flash::error('Permission not found');
			return redirect(route('permissions.index'));
		}

		return view('permissions.show')->with('permission', $permission);
	}

	/**
	 * Show the form for editing the specified Permission.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$permission = Permission::find($id);

		if(empty($permission))
		{
			Flash::error('Permission not found');
			return redirect(route('permissions.index'));
		}

		return view('permissions.edit')->with('permission', $permission);
	}

	/**
	 * Update the specified Permission in storage.
	 *
	 * @param  int    $id
	 * @param CreatePermissionRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreatePermissionRequest $request)
	{
		/** @var Permission $permission */
		$permission = Permission::find($id);

		if(empty($permission))
		{
			Flash::error('Permission not found');
			return redirect(route('permissions.index'));
		}

		$permission->fill($request->all());
		$permission->save();

		Alert::message('Permiso actualizado exitosamente.')->persistent('Cerrar');

		return redirect(route('permissions.index'));
	}

	/**
	 * Remove the specified Permission from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var Permission $permission */
		$permission = Permission::find($id);

		if(empty($permission))
		{
			Flash::error('Permission not found');
			return redirect(route('permissions.index'));
		}

		$permission->delete();

		Alert::success('Permiso eliminado exitosamente.')->persistent('Cerrar');

		return redirect(route('permissions.index'));
	}
}
