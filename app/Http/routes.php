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


Route::get('permissionEdit/{id}',function($id){
    $role = App\Role::find($id);
    
    $permissions = $role->permissions;

    return view('roles.permissions')
    ->with('role', $role)
    ->with('permissions', $permissions);
});




/*======================= Acreditado======================*/

Route::resource('accrediteds', 'AccreditedController');


Route::get('accrediteds/{id}/delete', [
    'as' => 'accrediteds.delete',
    'uses' => 'AccreditedController@destroy',

    ]);   

Route::resource('addresses', 'AddressController');

Route::get('addresses/{id}/delete', [
    'as' => 'addresses.delete',
    'uses' => 'AddressController@destroy',

]);
 
Route::get('addressesAccredited/{id}/',[
    'as' => 'accrediteds.addressesAccredited',
    'uses' => 'AccreditedController@addressesAccredited',
]);

Route::get('addresses/{id}',[
    'as' => 'accrediteds.addresses',
    'uses' => 'AccreditedController@addresses',
]);


Route::get('view-addresses/{id}', function($id){
    $accrediteds = App\Models\Accredited::find($id);
    $addresses = $accrediteds->addresses;

    return view('addresses.view-addresses')
    ->with('addresses', $addresses);
});


Route::resource('references', 'ReferencesController');

Route::get('references/{id}/delete', [
    'as' => 'references.delete',
    'uses' => 'ReferencesController@destroy',

    ]);


Route::get('referencesAccredited/{id}/',[
    'as' => 'accrediteds.referencesAccredited',
    'uses' => 'AccreditedController@referencesAccredited',
]);

Route::get('references/{id}',[
    'as' => 'accrediteds.references',
    'uses' => 'AccreditedController@references',
    ]);

Route::resource('users', 'UserController');

Route::get('users/{id}/delete', [
    'as' => 'users.delete',
    'uses' => 'UserController@destroy',


    ]);


Route::resource('avals', 'AvalController');

Route::get('avals/{id}/delete', [
    'as' => 'avals.delete',
    'uses' => 'AvalController@destroy',
    ]);

Route::get('avalsAccredited/{id}/',[
    'as' => 'accrediteds.avalsAccredited',
    'uses' => 'AccreditedController@avalsAccredited',
]);

Route::get('avals/{id}',[
    'as' => 'accrediteds.avals',
    'uses' => 'AccreditedController@avals',
    ]);


Route::resource('micros', 'MicroController');

Route::get('micros/{id}/delete', [
    'as' => 'micros.delete',
    'uses' => 'MicroController@destroy',

]);
 Route::get('microsAccredited/{id}/',[
    'as' => 'accrediteds.microsAccredited',
    'uses' => 'AccreditedController@microsAccredited',
]);
   


Route::get('positions', function (Illuminate\Http\Request  $request) {
    $term = $request->term ?: '';
    $positions = App\Role::where('name', 'like', $term.'%')->lists('name', 'id');
    $valid_positions = [];
    foreach ($positions as $id => $position) {
        $valid_positions[] = ['id' => $id, 'text' => $position];
    }
    return \Response::json($valid_positions);
});

Route::get('/deleterole/{user}/{role}', function($user, $role){
    $users = App\User::all();
    $user_quit = App\User::find($user);
    $role = App\Role::find($role);
    $user_quit->roles()->detach($role);
    alert()->success('Rol eliminado!')->persistent('Cerrar');
    return redirect(route('users.index'))
    ->with('users', $users);
});

Route::post('/updateroles', function(Illuminate\Http\Request  $request) {
    $user = App\User::find($request->input('user_id'));
    $users = App\User::all();
    $roles = $request->input($user->id);

    foreach ($roles as $role) {
        $name_role = App\Role::find($role);
        $user->attachRole($name_role);
    }
    alert()->info('Se han agregado los roles selecionados al usuario!')->persistent('Cerrar');
    return redirect(route('users.index'))
    ->with('users', $users);
});

Route::get('/test', function() {
    $user = App\User::find(7);
    $roles = $user->roles;
    $all_roles = App\Role::all();
    echo "<h1>Los que me faltan</h1>";
    $collection = $all_roles;

    $diff = $collection->diff($roles);

    $diff->all();
    foreach ($diff as $key => $value) {
        echo ++$key."  ".$value->name;
        echo "<br>";
    }
});





Route::resource('anchorings', 'AnchoringController');

Route::get('anchorings/{id}/delete', [
    'as' => 'anchorings.delete',
    'uses' => 'AnchoringController@destroy',
]);


Route::resource('products', 'ProductController');

Route::get('products/{id}/delete', [
    'as' => 'products.delete',
    'uses' => 'ProductController@destroy',
]);

Route::resource('histories', 'HistoryController');

Route::get('histories/{id}/delete', [
    'as' => 'histories.delete',
    'uses' => 'HistoryController@destroy',
]);
Route::get('historiesAccredited/{id}/',[
    'as' => 'accrediteds.historiesAccredited',
    'uses' => 'AccreditedController@historiesAccredited',
]);
  

Route::resource('studies', 'StudyController');

Route::get('studies/{id}/delete', [
    'as' => 'studies.delete',
    'uses' => 'StudyController@destroy',
]);
Route::get('studiesAccredited/{id}/',[
    'as' => 'accrediteds.studiesAccredited',
    'uses' => 'AccreditedController@studiesAccredited',
]);

