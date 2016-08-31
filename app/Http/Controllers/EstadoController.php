<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Route;
use Auth;
use Datatables;

use App\Http\Requests;

use App\Models\Seccion;
use App\Models\EstadoUsuario;
use App\Models\Usuario;
use App\Models\Usuario\Estado as CvEstado;

class EstadoController extends Controller
{
    private
        $_return_success = [
            'css' => 'success',
            'info' => 'Se han realizado los cambios solicitados',
            'icon' => 'fa fa-check'
        ],
        $_return_error = [
            'css' => 'danger',
            'info' => 'Ha ocurrido un error',
            'icon' => 'fa fa-exclamation-triangle'
        ];

    /**
     * Devuelve la vista de "Estado"
     * en las opciones de "Mi CV"
     *
     * @return null
     */
    public function getEstado(){
        $estados = EstadoUsuario::orderBy('id','desc')->get();
        $usuario = Usuario::with('estado')->find(Auth::user()->id);
        $data = [
            'secciones' => Seccion::all(),
            'estados' => $estados,
            'usuario' => $usuario
        ];
        return view('user-site-pro.mi-cv.secciones.estado', $data);
    }

    /**
     * Actualiza el estado del usuario
     * @param Request $r
     * @return string
     */
    public function postEstado(Request $r){
        $estado = CvEstado::firstOrNew(['usuario' => Auth::user()->id]);
        $estado->estado = $r->estado;
        if ($estado->save()){
            return response()->json($this->_return_success);
        } else {
            return response()->json($this->_return_error);
        }
    }
}
