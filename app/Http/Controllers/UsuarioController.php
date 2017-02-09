<?php

namespace App\Http\Controllers;

use Auth;
use Cache;
use Illuminate\Http\Request;
use App\Http\Requests\UsuarioRequest;

use App\Http\Requests;

use App\Models\Pais;
use App\Models\Usuario;

use Carbon\Carbon;

class UsuarioController extends Controller
{
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['create', 'store']]);
    }

    /**
     * [index description]
     * @return [type] [description]
     */
    public function index(Request $request)
    {
        return response()->json(! Usuario::whereEmail($request->email)->exists());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paises = Pais::all();
        $meses = getMonthsArray();
        return view('alpha.registro', compact('paises', 'meses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Requests\UsuarioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsuarioRequest $request)
    {
        $usuario = new Usuario;
        $usuario->nombre = $request->nombre;
        $usuario->fecha_nacimiento = Carbon::createFromDate($request->ano, $request->mes, $request->dia);
        $usuario->email = $request->email;
        $usuario->id_pais = $request->pais;
        $usuario->id_provincia = $request->provincia;
        $usuario->password = bcrypt($request->password);
        $usuario->fecha_vencimiento = Carbon::now();
        $usuario->url = substr(md5(microtime()),rand(0,26),10);

        if ($usuario->save()) {
            return view('alpha.complete');
        } else {
            return view('errors.500');
        }
    }

    /**
     * [show description]
     * @return [type] [description]
     */
    public function show()
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
    public function update(UsuarioRequest $r, $id_usuario)
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
