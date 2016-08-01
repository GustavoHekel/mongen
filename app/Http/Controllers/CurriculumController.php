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
use App\Models\Usuario\Trabajo as CvTrabajo;
use App\Models\Usuario\Skills as CvSkills;
use App\Models\Usuario\Interes as CvInteres;
use App\Models\Usuario\Idioma as CvIdiomas;
use App\Models\Usuario\Referencia as CvReferencias;

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
     * 
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
     * 
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
     * 
     * @return null
     */
    public function getEstudios(){
        $ruta = Route::getCurrentRoute()->getPath();
        $data = [
            'secciones' => $this->getSecciones($ruta),
        ];
        return view('user-site-pro.mi-cv.secciones.estudios', $data);
    }

    /**
     * Devuelve el listado de estudios 
     * para un usuario determinado.
     * 
     * @return json
     */
    public function getEstudiosTable(){
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

    /**
     * 
     */
    public function getTrabajos(){
        $ruta = Route::getCurrentRoute()->getPath();
        $data = [
            'secciones' => $this->getSecciones($ruta)
        ];
        return view('user-site-pro.mi-cv.secciones.trabajos', $data);
    }

    /**
     * 
     */
    public function getTrabajosTable(){
        $trabajos = CvTrabajo::where('usuario', Auth::user()->id);

        return Datatables::of($trabajos)
            ->addColumn('actions', function($trabajo){
                return '
                <a rel="tooltip" title="Ver" class="btn btn-simple btn-info btn-icon table-action view" data-original-title="View"><i class="fa fa-image"></i></a>
                <a rel="tooltip" title="Editar" class="btn btn-simple btn-warning btn-icon table-action edit" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                <a rel="tooltip" title="Eliminar" class="btn btn-simple btn-danger btn-icon table-action remove" data-original-title="Remove"><i class="fa fa-remove"></i></a>
                ';
            })
            ->make(true);
    }

    /**
     * [getSkills description]
     * @return [type] [description]
     */
    public function getSkills(){
        $ruta = Route::getCurrentRoute()->getPath();
        $data = [
            'secciones' => $this->getSecciones($ruta)
        ];
        return view('user-site-pro.mi-cv.secciones.skills', $data);
    }

    /**
     * [getSkillsTable description]
     * @return [type] [description]
     */
    public function getSkillsTable(){
        $skills = CvSkills::where('usuario', Auth::user()->id);

        return Datatables::of($skills)
            ->addColumn('level', function($skill){
                return '
                <div class="progress">
                  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:' . $skill->nivel * 10 . '%">
                    ' . $skill->nivel * 10 . '%
                  </div>
                </div>
                ';
            })
            ->addColumn('actions', function($skill){
                return '
                <a rel="tooltip" title="Ver" class="btn btn-simple btn-info btn-icon table-action view" data-original-title="View"><i class="fa fa-image"></i></a>
                <a rel="tooltip" title="Editar" class="btn btn-simple btn-warning btn-icon table-action edit" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                <a rel="tooltip" title="Eliminar" class="btn btn-simple btn-danger btn-icon table-action remove" data-original-title="Remove"><i class="fa fa-remove"></i></a>
                ';
            })
            ->make(true);
    }

    /**
     * [getIntereses description]
     * @return [type] [description]
     */
    public function getIntereses(){
        $ruta = Route::getCurrentRoute()->getPath();
        $data = [
            'secciones' => $this->getSecciones($ruta)
        ];
        return view('user-site-pro.mi-cv.secciones.intereses', $data);
    }

    /**
     * [getInteresesTable description]
     * @return [type] [description]
     */
    public function getInteresesTable(){
        $interes = CvInteres::where('usuario', Auth::user()->id);

        return Datatables::of($interes)
            ->addColumn('actions', function($intere){
                return '
                <a rel="tooltip" title="Ver" class="btn btn-simple btn-info btn-icon table-action view" data-original-title="View"><i class="fa fa-image"></i></a>
                <a rel="tooltip" title="Editar" class="btn btn-simple btn-warning btn-icon table-action edit" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                <a rel="tooltip" title="Eliminar" class="btn btn-simple btn-danger btn-icon table-action remove" data-original-title="Remove"><i class="fa fa-remove"></i></a>
                ';
            })
            ->make(true);
    }

    /**
     * [getIdiomas description]
     * @return [type] [description]
     */
    public function getIdiomas(){
        $ruta = Route::getCurrentRoute()->getPath();
        $data = [
            'secciones' => $this->getSecciones($ruta)
        ];
        return view('user-site-pro.mi-cv.secciones.idiomas', $data);
    }

    /**
     * [getIdiomasTable description]
     * @return [type] [description]
     */
    public function getIdiomasTable(){
        $idiomas = CvIdiomas::where('usuario', Auth::user()->id);

        return Datatables::of($idiomas)
            ->addColumn('level', function($idioma){
                return '
                <div class="progress">
                  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:' . $idioma->nivel * 10 . '%">
                    ' . $idioma->nivel * 10 . '%
                  </div>
                </div>
                ';
            })
            ->addColumn('actions', function($skill){
                return '
                <a rel="tooltip" title="Ver" class="btn btn-simple btn-info btn-icon table-action view" data-original-title="View"><i class="fa fa-image"></i></a>
                <a rel="tooltip" title="Editar" class="btn btn-simple btn-warning btn-icon table-action edit" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                <a rel="tooltip" title="Eliminar" class="btn btn-simple btn-danger btn-icon table-action remove" data-original-title="Remove"><i class="fa fa-remove"></i></a>
                ';
            })
            ->make(true);
    }

    /**
     * [getReferencias description]
     * @return [type] [description]
     */
    public function getReferencias(){
        $ruta = Route::getCurrentRoute()->getPath();
        $data = [
            'secciones' => $this->getSecciones($ruta)
        ];
        return view('user-site-pro.mi-cv.secciones.referencias', $data);
    }

    public function getReferenciasTable(){
        $referencias = CvReferencias::where('usuario', Auth::user()->id)->with('referente');

        return Datatables::of($referencias)
            ->addColumn('actions', function($referencia){
                return '
                <a rel="tooltip" title="Ver" class="btn btn-simple btn-info btn-icon table-action view" data-original-title="View"><i class="fa fa-image"></i></a>
                <a rel="tooltip" title="Editar" class="btn btn-simple btn-warning btn-icon table-action edit" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                <a rel="tooltip" title="Eliminar" class="btn btn-simple btn-danger btn-icon table-action remove" data-original-title="Remove"><i class="fa fa-remove"></i></a>
                ';
            })
            ->make(true);
    }
    
}
