<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Datatables;

use App\Http\Requests;

use App\Models\Usuario\Idioma as CvIdioma;

class IdiomaController extends Controller
{
    /**
     * [index description]
     * @return [type] [description]
     */
    public function index()
    {
        $idiomas = CvIdioma::fromUser()->get();
        $data = [
            'idiomas' => $idiomas
        ];

        return view('user-site-pro.mi-cv.secciones.idiomas', $data);
    }

    /**
     * [store description]
     * @param  Request $r [description]
     * @return [type]     [description]
     */
    public function store(Request $r)
    {
        $idioma = new CvIdioma;
        $idioma->idioma = $r->nombre;
        $idioma->nivel = $r->nivel;
        $idioma->id_usuario = $r->user()->id_usuario;
        if ($idioma->save()) {
            return response()->created(['message' => 'Idioma created', 'data' => $idioma]);
        } else {
            return response()->error(['message' => 'Idioma not created']);
        }
    }

    /**
     * [update description]
     * @param  Request $r         [description]
     * @param  [type]  $id_idioma [description]
     * @return [type]             [description]
     */
    public function update(Request $r, $id_idioma)
    {

    }

    /**
     * [destroy description]
     * @param  [type] $id_idioma [description]
     * @return [type]            [description]
     */
    public function destroy($id_idioma)
    {

    }
}
