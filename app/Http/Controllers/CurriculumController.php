<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Route;
use Auth;

use App\Http\Requests;

use App\Classes\Menu;

use App\Models\Seccion;
use App\Models\EstadoUsuario;

use App\Models\Usuario;

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

    /**
     * Devuelve la vista de "Estado"
     * en las opciones de "Mi CV"
     * @param null
     * @return null
     */
    public function getEstado(){
        $ruta = Route::getCurrentRoute()->getPath();
        $secciones = Seccion::all();
        $estados = EstadoUsuario::orderBy('id','desc')->get();
        $usuario = Usuario::with('estado')->find(Auth::user()->id);
        $data = [
            'items' => Menu::getMenuUsuario($ruta),
            'secciones' => $secciones,
            'estados' => $estados,
            'usuario' => $usuario
        ];
        return view('user-site.mi-cv.secciones.estado', $data);
    }
}
