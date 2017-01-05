<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Http\Requests;

use App\Models\Usuario\Interes as CvInteres;

class InteresController extends Controller
{
    /**
     * [getintereses description]
     * @return [type] [description]
     */
    public function index()
    {
        $intereses = CvInteres::fromUser()->orderBy('id_interes', 'asc')->get();
        $data = [
            'intereses' => $intereses
        ];

        return view('user-site-pro.mi-cv.secciones.intereses', $data);
    }

    /**
     * [update description]
     * @param  Request $r        [description]
     * @param  [type]  $id_interes [description]
     * @return [type]            [description]
     */
    public function update(Request $r, $id_interes)
    {
        $interes = CvInteres::findOrFail($id_interes);
        $this->authorize('editar', $interes);

        $interes->nivel = $r->nivel;
        if ($interes->save()) {
            return response()->success(['message' => 'Interes updated']);
        } else {
            return response()->error(['message' => 'Interes not updated']);
        }
    }

    /**
     * [destroy description]
     * @param  [type] $id_interes [description]
     * @return [type]           [description]
     */
    public function destroy($id_interes)
    {
        $interes = CvInteres::findOrFail($id_interes);
        if ($interes->delete()) {
            return response()->success(['message' => 'Interes deleted']);
        } else {
            return response()->error(['message' => 'Interes not deleted']);
        }
    }

    /**
     * [store description]
     * @param  Request $r [description]
     * @return [type]     [description]
     */
    public function store(Request $r)
    {
        $interes = new CvInteres;
        $interes->descripcion = $r->nombre;
        // $interes->nivel = $r->nivel;
        $interes->id_usuario = $r->user()->id_usuario;
        if ($interes->save()) {
            return response()->created(['message' => 'Interes created', 'data' => $interes]);
        } else {
            return response()->error(['message' => 'Interes not created']);
        }
    }
}
