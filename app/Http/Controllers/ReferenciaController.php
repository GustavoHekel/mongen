<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Datatables;

use App\Http\Requests;

use App\Models\Usuario\Referencia as CvReferencias;

class ReferenciaController extends Controller
{
    /**
     * [getReferencias description]
     * @return [type] [description]
     */
    public function getReferencias(){
        return view('user-site-pro.mi-cv.secciones.referencias');
    }

    /**
     * [getReferenciasTable description]
     * @return [type] [description]
     */
    public function getReferenciasTable(){
        $referencias = CvReferencias::where('usuario', Auth::user()->id)->with('referente');

        return Datatables::of($referencias)
            ->addColumn('actions', function($referencia){
                return '
                <a rel="tooltip" title="Ver" class="btn btn-simple btn-info btn-icon table-action view" data-original-title="View"><i class="fa fa-image"></i></a>
                <a rel="tooltip" title="Editar" class="btn btn-simple btn-warning btn-icon table-action edit" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                <a rel="tooltip" title="Eliminar" class="btn btn-simple btn-danger btn-icon table-action remove" data-original-title="Remove"><i class="fa fa-remove"></i></a>
                ';
            })
            ->make(true);
    }
}
