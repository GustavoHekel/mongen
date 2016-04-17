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
     *
     *
     *
     */
    public function getLandingPrecios(){
    	return view('landing-guide.pricing');
    }
}
