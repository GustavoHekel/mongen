<?php

namespace App\Http\Controllers;

use Auth;
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
     * Recibe los datos del
     * formulario de login.
     * @param $r Request
     * @return bool
     */
    public function postLogin(Request $r)
    {
        if (Auth::attempt(['email' => $r->email, 'password' => $r->pass])) {
            $r->session()->put('menu', Menu::all());
            return redirect('dashboard');
        } else {
            $data = [
                'errors' => [
                    'Falló la autenticación, revise sus datos',
                ],
            ];
            return redirect('login')->with($data);
        }
    }

    /**
     * Devuelve la vista del dashboard
     * @param null
     * @return null
     */
    public function getDashboard(Request $r)
    {
        return view('user-site-pro.dashboard.index');
    }

    /**
     * [getPersonalInfoCv description]
     * @return [type]     [description]
     */
    public function getPersonalInfoCv()
    {
        $id_usuario = Auth::user()->id_usuario;
        $usuario = Usuario::with([
            'pais',
            'provincia'
        ])
        ->firstOrFail();

        $data = [
            'usuario' => $usuario,
        ];

        return view('user-site-pro.mi-cv.secciones.personal', $data);
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
