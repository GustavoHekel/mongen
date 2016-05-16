<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Route;

use App\Http\Requests;

use App\Classes\Menu;

use App\Models\Seccion;

class CurriculumController extends Controller
{
    /**
     * Devuelve la vista principal 
     * de la opción mi-cv. 
     * @param null
     * @return null
     */
    public function getIndex(){
    	$ruta = Route::getCurrentRoute()->getPath();
        $secciones = Seccion::all();
		$data = [
			'items' => Menu::getMenuUsuario($ruta),
            'secciones' => $secciones
		];

		return view('user-site.mi-cv.index' , $data);
    }
}
