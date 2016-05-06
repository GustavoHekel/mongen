<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Subscripcion;

class LandingController extends Controller
{
	/**
	 * Devuelve la vista principal de la landing page
	 * @return null
	 */
	public function getIndex(){
		return view ('landing-guide.index');
	}

	/**
	 * Devuelve la vista de precios
	 * @return null
	 */
	public function getPrecios(){
		return view('landing-guide.pricing');
	}

	/**
	 * Devuelve el formulario de login
	 * @return null
	 */
	public function getLogin(){
	    return view('landing-guide.login');
	}

	/**
	 * Devuelve el formulario de registro
	 * @return null
	 */
	public function getRegistrar(){
	    return view('landing-guide.register');
	}

	/**
	 * Devuelve la vista de about
	 * @return null
	 */
	public function getAbout(){
		return view('landing-guide.about');
	}

	/**
	 * Registra un nuevo correo electrónico
	 * en la base de datos de newsletter.
	 * @param Request $r
	 * @return json
	 */
	public function postNewsletter(Request $r){
		$existe = Subscripcion::where('email' , $r->email)->count();

		if (! $existe) {
			$s = new Subscripcion;
			$s->email = $r->email;
			$s->activo = 1;
			$s->save();
			return response()->json(['activo' => true]);
		} else {
			return response()->json(['activo' => false]);
		}

	}
}
