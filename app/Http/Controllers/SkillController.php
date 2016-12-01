<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Http\Requests;

use App\Models\Usuario\Skill as CvSkill;

class SkillController extends Controller
{
    /**
     * [getSkills description]
     * @return [type] [description]
     */
    public function index(){

        $skills = CvSkill::fromUser()->orderBy('id_skill', 'asc')->get();
        $data = [
            'skills' => $skills
        ];

        return view('user-site-pro.mi-cv.secciones.skills', $data);
    }

    /**
     * [update description]
     * @param  Request $r        [description]
     * @param  [type]  $id_skill [description]
     * @return [type]            [description]
     */
    public function update(Request $r, $id_skill)
    {
        $skill = CvSkill::findOrFail($id_skill);
        $this->authorize('editar', $skill);

        $skill->nivel = $r->nivel;
        if ($skill->save()) {
            return response()->success(['message' => 'Skill updated']);
        } else {
            return response()->error(['message' => 'Skill not updated']);
        }
    }

    /**
     * [destroy description]
     * @param  [type] $id_skill [description]
     * @return [type]           [description]
     */
    public function destroy($id_skill)
    {
        $skill = CvSkill::findOrFail($id_skill);
        if ($skill->delete()) {
            return response()->success(['message' => 'Skill deleted']);
        } else {
            return response()->error(['message' => 'Skill not deleted']);
        }
    }

    /**
     * [store description]
     * @param  Request $r [description]
     * @return [type]     [description]
     */
    public function store(Request $r)
    {
        $skill = new CvSkill;
        $skill->nombre = $r->nombre;
        $skill->nivel = $r->nivel;
        $skill->id_usuario = $r->user()->id_usuario;
        if ($skill->save()) {
            return response()->created(['message' => 'Skill created', 'data' => $skill]);
        } else {
            return response()->error(['message' => 'Skill not created']);
        }
    }
}
