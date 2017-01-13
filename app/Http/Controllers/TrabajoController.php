<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Datatables;
use Gate;
use Carbon\Carbon;

use App\Http\Requests;

use App\Models\Usuario\Trabajo as CvTrabajo;

class TrabajoController extends Controller
{
    /**
     * [index description]
     * @return [type] [description]
     */
    public function index()
    {
        return view('user-site-pro.mi-cv.secciones.trabajos');
    }

    /**
     * [create description]
     * @return [type] [description]
     */
    public function create()
    {
        return view('user-site-pro.mi-cv.secciones.trabajos.nuevo');
    }

    /**
     * [getTrabajosTable description]
     * @return [type] [description]
     */
    public function table()
    {
        $trabajos = CvTrabajo::fromUser();

        return Datatables::of($trabajos)
            ->addColumn('actions', function($trabajo){
                return '
                <a href="trabajos/' . $trabajo->id_trabajo . '" rel="tooltip" title="Ver" class="btn btn-simple btn-info btn-icon table-action view" data-original-title="View"><i class="fa fa-image"></i></a>
                <a href="trabajos/' . $trabajo->id_trabajo. '/editar" rel="tooltip" title="Editar" class="btn btn-simple btn-warning btn-icon table-action edit" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                <a id-trabajo="' . $trabajo->id_trabajo . '" rel="tooltip" title="Eliminar" class="btn btn-simple btn-danger btn-icon table-action remove" data-original-title="Remove"><i class="fa fa-remove"></i></a>
                ';
            })
            ->make(true);
    }

    /**
     * [show description]
     * @param  [type] $id_trabajo [description]
     * @return [type]             [description]
     */
    public function show($id_trabajo)
    {
        $trabajo = CvTrabajo::findOrFail($id_trabajo);
        $this->authorize('ver', $trabajo);

        $trabajo->desde_text = Carbon::createFromFormat('Ym', $trabajo->desde)->format('M, Y');
        if (is_null($trabajo->hasta)) {
            $trabajo->hasta_text = 'Trabajo actualmente aquí';
        } else {
            $trabajo->hasta_text = Carbon::createFromFormat('Ym', $trabajo->hasta)->format('M, Y');
        }

        $data = [
            'trabajo' => $trabajo
        ];

        return view('user-site-pro.mi-cv.secciones.trabajos.ver', $data);
    }

    /**
     * [edit description]
     * @param  [type] $id_trabajo [description]
     * @return [type]             [description]
     */
    public function edit($id_trabajo)
    {
        $trabajo = CvTrabajo::findOrFail($id_trabajo);
        $this->authorize('ver', $trabajo);

        $data = [
            'trabajo' => $trabajo
        ];

        return view('user-site-pro.mi-cv.secciones.trabajos.editar', $data);
    }

    /**
     * [store description]
     * @param  Request $r [description]
     * @return [type]     [description]
     */
    public function store(Request $r)
    {
        $trabajo = new CvTrabajo;
        $trabajo->id_usuario = Auth::user()->id_usuario;
        $trabajo->lugar = $r->lugar;
        $trabajo->puesto = $r->puesto;
        $trabajo->desde = $r->anio_desde . $r->mes_desde;
        $trabajo->detalle = $r->detalle;

        if (isset ($r->trabajo_actual)) {
            $trabajo->hasta = null;
        } else {
            $trabajo->hasta = $r->anio_hasta . $r->mes_hasta;
        }
        $trabajo->save();
    }

    /**
     * [update description]
     * @param  Request $r          [description]
     * @param  [type]  $id_trabajo [description]
     * @return [type]              [description]
     */
    public function update(Request $r, $id_trabajo)
    {
        $trabajo = CvTrabajo::findOrFail($id_trabajo);
        $this->authorize('editar', $trabajo);

        $trabajo->lugar = $r->lugar;
        $trabajo->puesto = $r->puesto;
        $trabajo->desde = $r->anio_desde . $r->mes_desde;
        $trabajo->detalle = $r->detalle;

        if (isset ($r->trabajo_actual)) {
            $trabajo->hasta = null;
        } else {
            $trabajo->hasta = $r->anio_hasta . $r->mes_hasta;
        }
        $trabajo->save();
    }

    /**
     * [destroy description]
     * @param  [type] $id_trabajo [description]
     * @return [type]             [description]
     */
    public function destroy($id_trabajo)
    {
        $trabajo = CvTrabajo::findOrFail($id_trabajo);
        $this->authorize('eliminar', $trabajo);

        if ($trabajo->delete()) {
            return response()->json(['mensaje' => 'Registro eliminado'], 200);
        } else {
            return response()->json(['mensaje' => 'Registro no encontrado'], 404);
        }
    }

}
