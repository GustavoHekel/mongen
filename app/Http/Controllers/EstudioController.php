<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Datatables;

use App\Http\Requests;

use App\Models\Usuario\Estudio as CvEstudio;

class EstudioController extends Controller
{
    /**
     * Devuelve la vista "Estudios"
     * en las opciones de "Mi CV"
     *
     * @return null
     */
    public function getEstudios(){
        return view('user-site-pro.mi-cv.secciones.estudios');
    }

    /**
     * Devuelve el listado de estudios
     * para un usuario determinado.
     *
     * @return json
     */
    public function getEstudiosTable(){
        $estudios = CvEstudio::where('id_usuario', Auth::user()->id_usuario);

        return Datatables::of($estudios)
            ->addColumn('actions', function($estudio){
                return '
                <a rel="tooltip" title="Ver" class="btn btn-simple btn-info btn-icon table-action view" data-original-title="View"><i class="fa fa-image"></i></a>
                <a rel="tooltip" title="Editar" class="btn btn-simple btn-warning btn-icon table-action edit" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                <a rel="tooltip" title="Eliminar" class="btn btn-simple btn-danger btn-icon table-action remove" data-original-title="Remove"><i class="fa fa-remove"></i></a>
                ';
            })
            ->make(true);
    }
}
