<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Datatables;
use Session;

use App\Http\Requests;

use App\Models\Seccion;
use App\Models\Estado;
use App\Models\Usuario;
use App\Models\Usuario\Estado as CvEstado;

class EstadoController extends Controller
{
    /**
     * Devuelve la vista de "Estado" en las opciones de "Mi CV"
     *
     * @return null
     */
    public function index()
    {
        $estado_usuario = CvEstado::fromUser()->first();
        $data = [
            'estado_usuario' => $estado_usuario
        ];
        return view('user-site-pro.mi-cv.secciones.estado', $data);
    }

    /**
     * [store description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function store(Request $request)
    {
        $estado = new CvEstado;
        $estado->id_usuario = Auth::user()->id_usuario;
        $estado->id_estado = $request->id_estado;
        if ($estado->save()){
            return response()->created(['message' => 'Estado guardado', 'data' => $estado]);
        } else {
            return response()->error(['message' => 'Error al guardar el estado']);
        }
    }

    /**
     * Actualiza el estado del usuario
     * @param Request $r
     * @return string
     */
    public function update(Request $r, $id_estado)
    {
        $estado = CvEstado::fromUser()->first();
        $this->authorize('editar', $estado);
        $estado->id_estado = $r->id_estado;
        if ($estado->save()){
            return response()->success(['message' => 'Estado actualizado']);
        } else {
            return response()->error(['message' => 'Error al actualizar el estado']);
        }
    }
}
