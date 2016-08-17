<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Route;
use Auth;
use Datatables;

use App\Http\Requests;

use App\Models\Usuario\Estado as CvEstado;

class EstadoController extends Controller
{
    /**
     * Devuelve la vista de "Estado"
     * en las opciones de "Mi CV"
     *
     * @return null
     */
    public function getEstado(){
        $ruta = Route::getCurrentRoute()->getPath();
        $estados = EstadoUsuario::orderBy('id','desc')->get();
        $usuario = Usuario::with('estado')->find(Auth::user()->id);
        $data = [
            'secciones' => $this->getSecciones($ruta),
            'estados' => $estados,
            'usuario' => $usuario
        ];
        return view('user-site-pro.mi-cv.secciones.estado', $data);
    }
}
