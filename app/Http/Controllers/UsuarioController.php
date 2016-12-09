<?php

namespace App\Http\Controllers;

use Auth;
use Cache;
use Illuminate\Http\Request;

use App\Models\Usuario\Menu;
use App\Models\Usuario\Email as CvEmail;
use App\Models\Usuario\Telefono as CvTelefono;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['postLogin']]);
    }

    /**
     * [index description]
     * @return [type] [description]
     */
    public function index()
    {
        $data = [
            'paises' => Cache::get('paises'),
            'provincias' => Cache::get('provincias'),
        ];
        return view('user-site-pro.mi-cv.secciones.personal', $data);
    }

    /**
     * [update description]
     * @param  Request $r          [description]
     * @param  [type]  $id_usuario [description]
     * @return [type]              [description]
     */
    public function update(Request $r, $id_usuario)
    {

    }

    /**
     * [getContacto description]
     * @return [type] [description]
     */
    public function getContacto()
    {
        $id_usuario = Auth::user()->id_usuario;
        $emails = CvEmail::where('id_usuario', $id_usuario)->get();
        $telefonos = CvTelefono::where('id_usuario', $id_usuario)->get();

        $data = [
            'emails' => $emails,
            'telefonos' => $telefonos
        ];

        return view('user-site-pro.mi-cv.secciones.contacto', $data);
    }
}
