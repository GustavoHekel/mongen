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
	public function index()
	{
		return view('alpha.index');
	}

	/**
	 * Devuelve la vista de precios
	 * @return null
	 */
	public function planes()
	{
		// return view('landing-guide.pricing');
		return view('alpha.plans');
	}

	/**
	 * Devuelve la información del plan FREE
	 * @return null
	 */
	public function free()
	{
		return view('alpha.free');
	}

	/**
	 * Devuelve la información del plan FREE
	 * @return null
	 */
	public function premium()
	{
		return view('alpha.premium');
	}

	/**
	 * Devuelve el formulario de login
	 * @return null
	 */
	public function login()
	{
	    return view('user-site-pro.login');
	}

	/**
	 * Devuelve la vista de about
	 * @return null
	 */
	public function acerca()
	{
		// return view('landing-guide.about');
	}

	/**
	 * Devuelve el estado del registro
	 * @param int $status
	 * @return null
	 */
	public function completo($status)
	{
		if ($status) {
			return view('alpha.complete');
		} else {
			return view('errors.500');
		}
	}

	/**
	 * Devuelve algunos ejemplos de CV
	 * @return null
	 */
	public function ejemplos()
	{
		return view('alpha.examples');
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
