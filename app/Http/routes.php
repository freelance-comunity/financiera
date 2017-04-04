  <?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    //return view('welcome');
    return redirect('login');
});

Route::get('/roles', function() {
    $propietario = new App\Role();
    $propietario->name         = 'propietario';
    $propietario->display_name = 'Usuario Propietario'; // optional
    $propietario->description  = 'Coordinador del sistema con todos los privilegios'; // optional
    $propietario->save();

    $caja = new App\Role();
    $caja->name         = 'caja';
    $caja->display_name = 'Usuario Caja'; // optional
    $caja->description  = 'Caja el cual hara uso de los servicios de S&C'; // optional
    $caja->save();

    $promotor = new App\Role();
    $promotor->name         = 'promotor';
    $promotor->display_name = 'Usuario promotor'; // optional
    $promotor->description  = 'Caja el cual hara uso de los servicios de S&C'; // optional
    $promotor->save();

    $coordinador = new App\Role();
    $coordinador->name         = 'coordinador';
    $coordinador->display_name = 'Usuario coordinador'; // optional
    $coordinador->description  = 'Caja el cual hara uso de los servicios de S&C'; // optional
    $coordinador->save();

    $mesa = new App\Role();
    $mesa->name         = 'mesa';
    $mesa->display_name = 'Usuario mesa de control'; // optional
    $mesa->description  = 'Caja el cual hara uso de los servicios de S&C'; // optional
    $mesa->save();

    $direccion = new App\Role();
    $direccion->name         = 'direccion';
    $direccion->display_name = 'Usuario direccion '; // optional
    $direccion->description  = 'Caja el cual hara uso de los servicios de S&C'; // optional
    $direccion->save();
    echo "Listo";
});
/*============== Main Routes ==============*/

Route::auth();

Route::get('/home', 'HomeController@index');



Route::resource('permissions', 'PermissionController');

Route::get('permissions/{id}/delete', [
    'as' => 'permissions.delete',
    'uses' => 'PermissionController@destroy',

    ]);   

Route::resource('roles', 'RolesController');
Route::get('roles/{id}/delete', [
    'as' => 'roles.delete',
    'uses' => 'RolesController@destroy',
]);

Route::get('asignamment/{id}',function($id){
    $role = App\Role::find($id);
    $permissions = App\Permission::all();

    return view('roles.add')
    ->with('role', $role)
    ->with('permissions', $permissions);
});

Route::Post ('/asignamment', 'RolesController@addPermission');

    

