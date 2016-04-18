<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    /**
     * Devuelve la vista principal de la landing page
     * @return null
     */
    public function getLandingIndex(){
    	return view ('landing-guide.index');
    }

    /**
     * Devuelve la vista de precios
     * @return null
     */
    public function getLandingPrecios(){
    	return view('landing-guide.pricing');
    }

    /**
     * Devuelve el formulario de login
     * @return null
     */
    public function getLandingLogin(){
        return view('landing-guide.login');
    }
}
