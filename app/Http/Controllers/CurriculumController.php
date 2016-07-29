<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Route;
use Auth;
use Datatables;

use App\Http\Requests;

use App\Classes\Menu;

use App\Models\Seccion;
use App\Models\EstadoUsuario;
use App\Models\Usuario;

use App\Models\Usuario\Estado as CvEstado;
use App\Models\Usuario\Estudio as CvEstudio;

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
     * Devuelve un objeto con las secciones
     * para mostrarlas en una lista.
     * @param string $route
     * @return json
     */
    private function getSecciones($route){

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
		return view('user-site-pro.mi-cv.index' , $data);
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
        return view('user-site-pro.mi-cv.secciones.estado', $data);
    }

    /**
     * Actualiza el estado del usuario
     * @param Request $r
     * @return string
     */
    public function postEstado(Request $r){
        $estado = CvEstado::firstOrNew(['usuario' => Auth::user()->id]);
        $estado->estado = $r->estado;
        if ($estado->save()){
            return response()->json($this->_return_success);
        } else {
            return response()->json($this->_return_error);
        }
    }

    /**
     * Devuelve la vista "Estudios"
     * en las opciones de "Mi CV"
     * @param null
     * @return null
     */
    public function getEstudios(){
        $ruta = Route::getCurrentRoute()->getPath();
        $usuario = Usuario::with('estudios')->find(Auth::user()->id);
        $data = [
            'secciones' => $this->getSecciones($ruta),
        ];
        return view('user-site-pro.mi-cv.secciones.estudios', $data);
    }

    /**
     * Devuelve el listado de estudios 
     * para un usuario determinado.
     * @param int $usuario
     * @return json
     */
    public function getEstudiosUsuario(){

        $estudios = CvEstudio::where('usuario', Auth::user()->id);

        return Datatables::of($estudios)
            ->addColumn('actions', function($estudio){
                return '
                <a rel="tooltip" title="Ver" class="btn btn-simple btn-info btn-icon table-action view" data-original-title="View"><i class="fa fa-image"></i></a>
                <a rel="tooltip" title="Editar" class="btn btn-simple btn-warning btn-icon table-action edit" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                <a rel="tooltip" title="Eliminar" class="btn btn-simple btn-danger btn-icon table-action remove" data-original-title="Remove"><i class="fa fa-remove"></i></a>
                ';
            })
            ->make(true);
    }

    
}
