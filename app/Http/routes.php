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
Route::get('zohoverify/verifyforzoho.html' , function(){
	return view('verifyforzoho');
});

/*
|--------------------------------------------------------------------------
| Landing page Routes
|--------------------------------------------------------------------------
|
| Las siguientes rutas son todas las que se van a utilizar para el
| manejo de la landing page.
|
*/
Route::group(['middleware' => ['landing']] , function() {
	Route::get('/', 'LandingController@getIndex')->name('index');
	Route::get('precios', 'LandingController@getPrecios')->name('precios');
	Route::get('about', 'LandingController@getAbout')->name('about');
	Route::get('recover', 'LandingController@getRecover')->name('recover');
	Route::post('newsletter', 'LandingController@postNewsletter');
	Route::get('registrar', 'LandingController@getRegistrar')->name('registrar');
	Route::get('login', 'LandingController@getLogin')->name('login');
	Route::post('login', 'UsuariosController@postLogin');
});

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
	
	Route::get('dashboard', 'UsuariosController@getDashboard')->name('dashboard');
	Route::get('estadisticas', 'EstadisticasController@getIndex');
	Route::get('mensajes', 'InboxController@getIndex');
	Route::get('mi-cuenta', 'CuentasController@getIndex');
	Route::get('facturacion', 'FacturacionController@getIndex');
	Route::get('ayuda', 'AyudaController@getIndex');

	/**
	 * MI CV
	 */
	Route::get('mi-cv', 'CurriculumController@getIndex');
	
	Route::get('mi-cv/estado', 'CurriculumController@getEstado');
	Route::post('mi-cv/estado', 'CurriculumController@postEstado');
	
	Route::get('mi-cv/estudios', 'CurriculumController@getEstudios');
	Route::post('mi-cv/estudios', 'CurriculumController@postEstudios');
	Route::get('mi-cv/estudios/listado', 'CurriculumController@getEstudiosUsuario');

});