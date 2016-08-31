<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Datatables;

use App\Http\Requests;

use App\Models\Usuario\Skills as CvSkills;

class SkillController extends Controller
{
    /**
     * [getSkills description]
     * @return [type] [description]
     */
    public function getSkills(){
        return view('user-site-pro.mi-cv.secciones.skills');
    }

    /**
     * [getSkillsTable description]
     * @return [type] [description]
     */
    public function getSkillsTable(){
        $skills = CvSkills::where('usuario', Auth::user()->id);

        return Datatables::of($skills)
            ->addColumn('level', function($skill){
                return '
                <div class="progress">
                  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:' . $skill->nivel * 10 . '%">
                    ' . $skill->nivel * 10 . '%
                  </div>
                </div>
                ';
            })
            ->addColumn('actions', function($skill){
                return '
                <a rel="tooltip" title="Ver" class="btn btn-simple btn-info btn-icon table-action view" data-original-title="View"><i class="fa fa-image"></i></a>
                <a rel="tooltip" title="Editar" class="btn btn-simple btn-warning btn-icon table-action edit" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                <a rel="tooltip" title="Eliminar" class="btn btn-simple btn-danger btn-icon table-action remove" data-original-title="Remove"><i class="fa fa-remove"></i></a>
                ';
            })
            ->make(true);
    }
}
