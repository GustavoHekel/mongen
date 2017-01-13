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
    public function table()
    {
        $cursos = CvCurso::fromUser();

        return Datatables::of($cursos)
            ->addColumn('actions', function($curso){
                return '
                <a href="cursos/' . $curso->id_curso . '" rel="tooltip" title="Ver" class="btn btn-simple btn-info btn-icon table-action view" data-original-title="Ver"><i class="fa fa-image"></i></a>
                <a href="cursos/' . $curso->id_curso . '/editar" rel="tooltip" title="Editar" class="btn btn-simple btn-warning btn-icon table-action edit" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                <a id-curso="' . $curso->id_curso . '" rel="tooltip" title="Eliminar" class="btn btn-simple btn-danger btn-icon table-action remove" data-original-title="Remove"><i class="fa fa-remove"></i></a>
                ';
            })
            ->make(true);
    }

    /**
     * [getcurso description]
     * @param  [type] $id_curso [description]
     * @return [type]             [description]
     */
    public function show($id_curso)
    {
        $curso = CvCurso::findOrFail($id_curso);
        $this->authorize('ver', $curso);

        $curso->desde_text = Carbon::createFromFormat('Ym', $curso->desde)->format('M, Y');
        if (is_null($curso->hasta)) {
            $curso->hasta_text = 'En curso';
        } else {
            $curso->hasta_text = Carbon::createFromFormat('Ym', $curso->hasta)->format('M, Y');
        }

        $data = [
            'curso' => $curso
        ];

        return view('user-site-pro.mi-cv.secciones.cursos.ver', $data);
    }

    /**
     * [editcurso description]
     * @param  [type] $id_curso [description]
     * @return [type]             [description]
     */
    public function edit($id_curso)
    {
        $curso = CvCurso::findOrFail($id_curso);
        $this->authorize('ver', $curso);

        $data = [
            'curso' => $curso
        ];

        return view('user-site-pro.mi-cv.secciones.cursos.editar', $data);
    }

    /**
     * [store description]
     * @param  Request $r [description]
     * @return [type]     [description]
     */
    public function store(Request $r)
    {
        $curso = new CvCurso;
        $curso->id_usuario = Auth::user()->id_usuario;
        $curso->instituto = $r->instituto;
        $curso->nombre = $r->nombre;
        $curso->desde = $r->anio_desde . $r->mes_desde;
        $curso->detalle = $r->detalle;

        if (isset ($r->en_curso)) {
            $curso->hasta = null;
        } else {
            $curso->hasta = $r->anio_hasta . $r->mes_hasta;
        }
        $curso->save();
    }

    /**
     * [update description]
     * @param  Request $r          [description]
     * @param  [type]  $id_curso [description]
     * @return [type]              [description]
     */
    public function update(Request $r, $id_curso)
    {
        $curso = CvCurso::findOrFail($id_curso);
        $this->authorize('editar', $curso);

        $curso->instituto = $r->instituto;
        $curso->nombre = $r->nombre;
        $curso->desde = $r->anio_desde . $r->mes_desde;
        $curso->detalle = $r->detalle;

        if (isset ($r->en_curso)) {
            $curso->hasta = null;
        } else {
            $curso->hasta = $r->anio_hasta . $r->mes_hasta;
        }
        $curso->save();
    }

    /**
     * [destroy description]
     * @param  [type] $id_curso [description]
     * @return [type]             [description]
     */
    public function destroy($id_curso)
    {
        $curso = CvCurso::findOrFail($id_curso);
        $this->authorize('eliminar', $curso);

        if ($curso->delete()) {
            return response()->success(['mensaje' => 'Registro eliminado'], 200);
        }
    }

}
