<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Datatables;

use App\Http\Requests;

use App\Models\Seccion;

class CurriculumController extends Controller
{

    private
        $_return_success = [
            'css' => 'success',
            'info' => 'Se han realizado los cambios solicitados',
            'icon' => 'fa fa-check'
        ],
        $_return_error = [
            'css' => 'danger',
            'info' => 'Ha ocurrido un error',
            'icon' => 'fa fa-exclamation-triangle'
        ];

    /**
     * Devuelve la vista principal
     * de la opción mi-cv.
     *
     * @return null
     */
    public function getIndex(Request $r){
        $r->session()->put('secciones_mi_cv', Seccion::all());
		return view('user-site-pro.mi-cv.index');
    }
}
