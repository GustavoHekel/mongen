<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Datatables;
use Gate;
use Carbon\Carbon;

use App\Http\Requests;

use App\Models\Usuario\Estudio as CvEstudio;

class EstudioController extends Controller
{
    /**
     * Devuelve la vista "Estudios"
     * en las opciones de "Mi CV"
     * @return null
     */
    public function index(){
        return view('user-site-pro.mi-cv.secciones.estudios');
    }

    /**
     * [newEstudio description]
     * @return [type] [description]
     */
    public function create()
    {
        return view('user-site-pro.mi-cv.secciones.estudios.nuevo');
    }

    /**
     * Devuelve el listado de estudios
     * para un usuario determinado.
     * @return json
     */
    public function list(){
        $estudios = CvEstudio::where('id_usuario', Auth::user()->id_usuario);

        return Datatables::of($estudios)
            ->addColumn('actions', function($estudio){
                return '
                <a href="estudios/' . $estudio->id_estudio . '" rel="tooltip" title="Ver" class="btn btn-simple btn-info btn-icon table-action view" data-original-title="Ver"><i class="fa fa-image"></i></a>
                <a href="estudios/' . $estudio->id_estudio . '/editar" rel="tooltip" title="Editar" class="btn btn-simple btn-warning btn-icon table-action edit" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                <a id-estudio="' . $estudio->id_estudio . '" rel="tooltip" title="Eliminar" class="btn btn-simple btn-danger btn-icon table-action remove" data-original-title="Remove"><i class="fa fa-remove"></i></a>
                ';
            })
            ->make(true);
    }

    /**
     * [getEstudio description]
     * @param  [type] $id_estudio [description]
     * @return [type]             [description]
     */
    public function show($id_estudio)
    {
        $estudio = CvEstudio::findOrFail($id_estudio);
        $this->authorize('ver', $estudio);

        $estudio->desde_text = Carbon::createFromFormat('Ym', $estudio->desde)->format('M, Y');
        if (is_null($estudio->hasta)) {
            $estudio->hasta_text = 'En curso';
        } else {
            $estudio->hasta_text = Carbon::createFromFormat('Ym', $estudio->hasta)->format('M, Y');
        }

        $data = [
            'estudio' => $estudio
        ];

        return view('user-site-pro.mi-cv.secciones.estudios.ver', $data);
    }

    /**
     * [editEstudio description]
     * @param  [type] $id_estudio [description]
     * @return [type]             [description]
     */
    public function edit($id_estudio)
    {
        $estudio = CvEstudio::findOrFail($id_estudio);
        $this->authorize('ver', $estudio);

        $data = [
            'estudio' => $estudio
        ];

        return view('user-site-pro.mi-cv.secciones.estudios.editar', $data);
    }

    /**
     * [postEstudio description]
     * @param  Request $r [description]
     * @return [type]     [description]
     */
    public function store(Request $r)
    {
        $estudio = new CvEstudio;
        $estudio->id_usuario = Auth::user()->id_usuario;
        $estudio->instituto = $r->instituto;
        $estudio->carrera = $r->carrera;
        $estudio->desde = $r->anio_desde . $r->mes_desde;
        $estudio->promedio = $r->promedio;

        if (isset ($r->en_curso)) {
            $estudio->hasta = null;
        } else {
            $estudio->hasta = $r->anio_hasta . $r->mes_hasta;
        }
        $estudio->save();
    }

    /**
     * [update description]
     * @param  Request $r          [description]
     * @param  [type]  $id_estudio [description]
     * @return [type]              [description]
     */
    public function update(Request $r, $id_estudio)
    {
        $estudio = CvEstudio::findOrFail($id_estudio);
        $this->authorize('editar', $estudio);

        $estudio->instituto = $r->instituto;
        $estudio->carrera = $r->carrera;
        $estudio->desde = $r->anio_desde . $r->mes_desde;
        $estudio->promedio = $r->promedio;

        if (isset ($r->en_curso)) {
            $estudio->hasta = null;
        } else {
            $estudio->hasta = $r->anio_hasta . $r->mes_hasta;
        }
        $estudio->save();
    }


    /**
     * [destroy description]
     * @param  [type] $id_estudio [description]
     * @return [type]             [description]
     */
    public function destroy($id_estudio)
    {
        $estudio = CvEstudio::findOrFail($id_estudio);
        $this->authorize('eliminar', $estudio);

        if ($estudio->delete()) {
            return response()->json(['mensaje' => 'Registro eliminado'], 200);
        } else {
            return response()->json(['mensaje' => 'Registro no encontrado'], 404);
        }
    }
}
