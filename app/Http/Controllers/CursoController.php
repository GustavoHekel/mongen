<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use Auth;
use Datatables;
use Gate;
use Carbon\Carbon;

use App\Models\Usuario\Curso as CvCurso;

class CursoController extends Controller
{
    /**
     * Devuelve la vista "Cursos" en las opciones de "Mi CV"
     * @return null
     */
    public function index(){
        return view('user-site-pro.mi-cv.secciones.cursos');
    }

    /**
     * Devuelve la vista para la cración de un nuevo curso
     * @return [type] [description]
     */
    public function create()
    {
        return view('user-site-pro.mi-cv.secciones.cursos.nuevo');
    }

    /**
     * Devuelve el listado de cursos para un usuario determinado.
     * @return json
     */
    public function list(){
        $cursos = CvCurso::fromUser();

        return Datatables::of($cursos)
            ->addColumn('actions', function($curso){
                return '
                <a href="cursos/' . $curso->id_estudio . '" rel="tooltip" title="Ver" class="btn btn-simple btn-info btn-icon table-action view" data-original-title="Ver"><i class="fa fa-image"></i></a>
                <a href="cursos/' . $curso->id_estudio . '/editar" rel="tooltip" title="Editar" class="btn btn-simple btn-warning btn-icon table-action edit" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                <a id-estudio="' . $curso->id_estudio . '" rel="tooltip" title="Eliminar" class="btn btn-simple btn-danger btn-icon table-action remove" data-original-title="Remove"><i class="fa fa-remove"></i></a>
                ';
            })
            ->make(true);
    }
}
