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
	Route::get('/', 'LandingController@index')->name('index');
	Route::get('precios', 'LandingController@precios')->name('precios');
	Route::get('about', 'LandingController@acerca')->name('about');
	Route::get('recover', 'LandingController@getRecover')->name('recover');
	Route::post('newsletter', 'LandingController@postNewsletter');

	Route::get('registrar', 'RegistroController@create');
	Route::post('registrar', 'RegistroController@store');
});

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
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

	// Authentication Routes...
	Route::get('login', 'LandingController@login')->name('login');
	Route::post('login', 'Auth\AuthController@login');
	Route::get('logout', 'Auth\AuthController@logout');

	// Registration Routes...

	// $this->get('register', 'Auth\AuthController@showRegistrationForm');
	// $this->post('register', 'Auth\AuthController@register');

	// Password Reset Routes...
	// $this->get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
	// $this->post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
	// $this->post('password/reset', 'Auth\PasswordController@reset');

	// Route::auth();
	// Route::get('/home', 'HomeController@index');

	Route::get('dashboard', 'DashboardController@index');
	Route::get('estadisticas', 'EstadisticaController@getIndex');
	Route::get('mensajes', 'InboxController@getIndex');
	Route::get('mi-cuenta', 'CuentasController@getIndex');
	Route::get('facturacion', 'FacturacionController@getIndex');
	Route::get('ayuda', 'AyudaController@getIndex');

	/**
	 * MI CV
	 */
 	Route::get('mi-cv', 'CurriculumController@index');
	Route::get('{url}', 'CurriculumController@show');
	Route::get('{url}/pdf', 'CurriculumController@pdf');

	Route::group(['prefix' => 'mi-cv'], function () {

		// Estado
		Route::get('estado', 'EstadoController@index');
		Route::put('estado/{id_estado}', 'EstadoController@update');

		// Datos personales
		Route::get('personal', 'UsuarioController@index');
		Route::put('personal/{id_usuario}', 'UsuarioController@update');

		// Estudios
		Route::get('estudios', 'EstudioController@index');
		Route::get('estudios/nuevo', 'EstudioController@create');
		Route::get('estudios/listado', 'EstudioController@table');
		Route::get('estudios/{id_estudio}', 'EstudioController@show');
		Route::get('estudios/{id_estudio}/editar', 'EstudioController@edit');
		Route::post('estudios', 'EstudioController@store');
		Route::put('estudios/{id_estudio}', 'EstudioController@update');
		Route::delete('estudios/{id_estudio}', 'EstudioController@destroy');

		// Trabajos
		Route::get('trabajos', 'TrabajoController@index');
		Route::get('trabajos/nuevo', 'TrabajoController@create');
		Route::get('trabajos/listado', 'TrabajoController@table');
		Route::get('trabajos/{id_trabajo}', 'TrabajoController@show');
		Route::get('trabajos/{id_trabajo}/editar', 'TrabajoController@edit');
		Route::post('trabajos', 'TrabajoController@store');
		Route::put('trabajos/{id_trabajo}', 'TrabajoController@update');
		Route::delete('trabajos/{id_trabajo}', 'TrabajoController@destroy');

		// Cursos
		Route::get('cursos', 'CursoController@index');
		Route::get('cursos/nuevo', 'CursoController@create');
		Route::get('cursos/listado', 'CursoController@table');
		Route::get('cursos/{id_curso}', 'CursoController@show');
		Route::get('cursos/{id_curso}/editar', 'CursoController@edit');
		Route::post('cursos', 'CursoController@store');
		Route::put('cursos/{id_curso}', 'CursoController@update');
		Route::delete('cursos/{id_curso}', 'CursoController@destroy');

		// Skills
		Route::get('skills', 'SkillController@index');
		Route::post('skills', 'SkillController@store');
		Route::put('skills/{id_skill}', 'SkillController@update');
		Route::delete('skills/{id_skill}', 'SkillController@destroy');

		// Idiomas
		Route::get('idiomas', 'IdiomaController@index');
		Route::post('idiomas', 'IdiomaController@store');
		Route::put('idiomas/{id_idioma}', 'IdiomaController@update');
		Route::delete('idiomas/{id_idioma}', 'IdiomaController@destroy');

		// Intereses
		Route::get('intereses', 'InteresController@index');
		Route::post('intereses', 'InteresController@store');
		Route::put('intereses/{id_interes}', 'InteresController@update');
		Route::delete('intereses/{id_interes}', 'InteresController@destroy');

		// Email
		Route::get('emails', 'EmailController@index');
		Route::put('emails/{id_email}', 'EmailController@update');

		// Teléfono
		Route::get('telefonos', 'TelefonoController@index');
		Route::put('telefonos/{id_telefono}', 'TelefonoController@update');

		// Red
		Route::get('redes', 'RedController@index');
		Route::put('redes/{id_red_usuario}', 'RedController@update');

		// Modelos
		Route::get('modelos', 'ModeloController@index');

		// Avatar
		Route::post('avatar', 'AvatarController@store');

	});

	// URL
	Route::get('url/{url}', 'UrlController@show');

	// Provincias
	Route::get('provincias/{id_pais}', 'ProvinciaController@show');

	// Progreso
	Route::get('progress/me', 'ProgresoUsuarioController@index');
});
