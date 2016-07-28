<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class UsuariosController extends Controller
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
}
