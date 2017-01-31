<?php

namespace App\Http\Controllers;

use Auth;
use Cache;
use Illuminate\Http\Request;

use App\Models\Usuario;
use App\Models\Usuario\Extracto;

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
            'usuario' => Usuario::full()->me()->first(),
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
        $usuario = Usuario::findOrFail($id_usuario);
        $usuario->nombre = $r->nombre;
        $usuario->fecha_nacimiento = $r->fecha_nacimiento;
        $usuario->id_pais = $r->id_pais;
        $usuario->id_provincia = $r->id_provincia;
        $usuario->url = $r->url;
        $usuario->extracto->profesion = $r->profesion;
        $usuario->extracto->extracto = $r->extracto;
        $usuario->push();

        return response()->success(['message' => 'User updated']);
    }
}
