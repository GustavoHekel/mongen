<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

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
}
