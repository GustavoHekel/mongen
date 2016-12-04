<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use Session;

use App\Models\Seccion;

class CurriculumController extends Controller
{
    /**
     * Devuelve la vista principal
     * de la opción mi-cv.
     *
     * @return null
     */
    public function index(Request $r){
        Session::put('secciones', Seccion::all());
        return view('user-site-pro.mi-cv.index');
    }
}
