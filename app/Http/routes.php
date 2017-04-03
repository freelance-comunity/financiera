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
    $owner = new App\Role();
    $owner->name         = 'propietario';
    $owner->display_name = 'Usuario Propietario'; // optional
    $owner->description  = 'Coordinador del sistema con todos los privilegios'; // optional
    $owner->save();

    $admin = new App\Role();
    $admin->name         = 'caja';
    $admin->display_name = 'Usuario Caja'; // optional
    $admin->description  = 'Caja el cual hara uso de los servicios de S&C'; // optional
    $admin->save();

    $admin = new App\Role();
    $admin->name         = 'promotor';
    $admin->display_name = 'Usuario promotor'; // optional
    $admin->description  = 'Caja el cual hara uso de los servicios de S&C'; // optional
    $admin->save();

    $admin = new App\Role();
    $admin->name         = 'coordinador';
    $admin->display_name = 'Usuario coordinador'; // optional
    $admin->description  = 'Caja el cual hara uso de los servicios de S&C'; // optional
    $admin->save();

    $admin = new App\Role();
    $admin->name         = 'mesa';
    $admin->display_name = 'Usuario mesa de control'; // optional
    $admin->description  = 'Caja el cual hara uso de los servicios de S&C'; // optional
    $admin->save();

    $admin = new App\Role();
    $admin->name         = 'direccion';
    $admin->display_name = 'Usuario direccion '; // optional
    $admin->description  = 'Caja el cual hara uso de los servicios de S&C'; // optional
    $admin->save();
    echo "Listo";
});
/*============== Main Routes ==============*/

Route::auth();

Route::get('/home', 'HomeController@index');
