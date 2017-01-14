<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use Session;
use PDF;

use App\Models\Seccion;
use App\Models\Usuario;

class CurriculumController extends Controller
{
    /**
     * Devuelve la vista principal
     * de la opción mi-cv.
     *
     * @return null
     */
    public function index(Request $r){
        Session::put('secciones', Seccion::all());
        return view('user-site-pro.mi-cv.index');
    }

    /**
     * [show description]
     * @param  [type] $url [description]
     * @return [type]      [description]
     */
    public function show($url)
    {
        $user = Usuario::with([
                'estudios',
                'red'
            ])
            ->whereUrl($url)
            ->first();

        $data = [
            'user' => $user
        ];
        // return response()->json($data);

        // return view('cvs.linkedin', $data);
        $pdf = PDF::loadview('cvs.linkedin', $data);
        return $pdf->download('resume.pdf');
    }
}
