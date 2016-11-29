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
	Route::post('login', 'UsuarioController@postLogin');

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

	Route::get('dashboard', 'UsuarioController@getDashboard')->name('dashboard');
	Route::get('estadisticas', 'EstadisticaController@getIndex');
	Route::get('mensajes', 'InboxController@getIndex');
	Route::get('mi-cuenta', 'CuentasController@getIndex');
	Route::get('facturacion', 'FacturacionController@getIndex');
	Route::get('ayuda', 'AyudaController@getIndex');

	/**
	 * MI CV
	 */
 	Route::get('mi-cv', 'CurriculumController@getIndex');
	Route::group(['prefix' => 'mi-cv'], function () {

		// Estado
		Route::get('estado', 'EstadoController@getEstado');
		Route::post('estado', 'EstadoController@postEstado');

		// Estudios
		Route::get('estudios', 'EstudioController@index');
		Route::get('estudios/nuevo', 'EstudioController@create');
		Route::get('estudios/listado', 'EstudioController@list');
		Route::get('estudios/{id_estudio}', 'EstudioController@show');
		Route::get('estudios/{id_estudio}/editar', 'EstudioController@edit');
		Route::post('estudios', 'EstudioController@store');
		Route::put('estudios/{id_estudio}', 'EstudioController@update');
		Route::delete('estudios/{id_estudio}', 'EstudioController@destroy');

		// Trabajos
		Route::get('trabajos', 'TrabajoController@index');
		Route::get('trabajos/nuevo', 'TrabajoController@create');
		Route::get('trabajos/listado', 'TrabajoController@list');
		Route::get('trabajos/{id_trabajo}', 'TrabajoController@show');
		Route::get('trabajos/{id_trabajo}/editar', 'TrabajoController@edit');
		Route::post('trabajos', 'TrabajoController@store');
		Route::put('trabajos/{id_trabajo}', 'TrabajoController@update');
		Route::delete('trabajos/{id_trabajo}', 'TrabajoController@destroy');

		// Skills
		Route::get('skills', 'SkillController@index');
		Route::get('skills/listado', 'SkillController@list');
		Route::put('skills/{id_skill}', 'SkillController@update');

	});

	// Intereses
	Route::get('mi-cv/intereses', 'InteresController@getIntereses');
	Route::get('mi-cv/intereses/listado', 'InteresController@getInteresesTable');

	// Idiomas
	Route::get('mi-cv/idiomas', 'IdiomaController@getIdiomas');
	Route::get('mi-cv/idiomas/listado', 'IdiomaController@getIdiomasTable');

	// Referencias
	Route::get('mi-cv/referencias', 'ReferenciaController@getReferencias');
	Route::get('mi-cv/referencias/listado', 'ReferenciaController@getReferenciasTable');
	Route::get('mi-cv/referencias/{id_referencia}', 'ReferenciaController@getReferencia');

	// Personal
	Route::get('mi-cv/personal', 'UsuarioController@getPersonalInfoCv');

	// Contacto
	Route::get('mi-cv/contacto', 'UsuarioController@getContacto');

});
