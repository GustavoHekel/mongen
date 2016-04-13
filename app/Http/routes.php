<?php
/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Landing page Routes
|--------------------------------------------------------------------------
|
| Las siguientes rutas son todas las que se van a
| utilizar para el manejo de la landing page.
|
*/

Route::get('/', 'HomeController@getLandingPage');

Route::get('/01', 'Template01Controller@getTemplate');

/*
|--------------------------------------------------------------------------
| User admin page Routes
|--------------------------------------------------------------------------
|
| Las siguientes rutas son todas las que se van a utilizar para el
| manejo de la parte de administración por parte del usuario.
|
*/


/*
|--------------------------------------------------------------------------
| Admin page Routes
|--------------------------------------------------------------------------
|
| Las siguientes rutas son todas las que se van a utilizar para el manejo
| de la parte de administración por parte del administrador.
|
*/


/*
|--------------------------------------------------------------------------
| Test Routes
|--------------------------------------------------------------------------
|
| Las siguientes rutas son todas las que 
| se van a utilizar para testeo.
|
*/

Route::get('geo' , function(){
	echo '<pre>' , print_r(GeoIP::getLocation('201.235.205.117')) , '</pre>';
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});



