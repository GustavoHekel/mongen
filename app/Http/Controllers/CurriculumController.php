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

use App\Models\Usuario\Estado as CvEstado;

class CurriculumController extends Controller
{
    /**
     * Devuelve un objeto con las secciones
     * para mostrarlas en una lista.
     * @param string $route
     * @return json
     */
    private function getSecciones($route){
        // $route = explode('/', $route);
        // if (count($route) > 1){
        //     $route = $route[1];
        // }

        $items = Seccion::all();
        foreach ($items as $item){
            echo $item->ruta;
            $item->activo = $item->url == $route ? 'active' : '';
        }
        return $items;
    }

    /**
     * Devuelve la vista principal 
     * de la opción mi-cv. 
     * @param null
     * @return null
     */
    public function getIndex(){

        $ruta = Route::getCurrentRoute()->getPath();
        $data = [
            'secciones' => $this->getSecciones($ruta)
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
        $estados = EstadoUsuario::orderBy('id','desc')->get();
        $usuario = Usuario::with('estado')->find(Auth::user()->id);
        $data = [
            'secciones' => $this->getSecciones($ruta),
            'estados' => $estados,
            'usuario' => $usuario
        ];
        return view('user-site.mi-cv.secciones.estado', $data);
    }

    /**
     * Actualiza el estado del usuario
     * @param Request $r
     * @return string
     */
    public function postEstado(Request $r){
        $estado = CvEstado::firstOrNew(['usuario' => Auth::user()->id]);
        $estado->estado = $r->estado;
        $estado->save();
        return 'pl';
    }
}
