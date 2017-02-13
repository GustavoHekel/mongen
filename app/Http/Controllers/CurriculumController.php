<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use Session;
use PDF;
use App;

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
        return view('user-site-pro.mi-cv');
    }

    /**
     * [show description]
     * @param  [type]  $url     [description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function show($url, Request $request)
    {
        App::setLocale($request->locale);
        $user = Usuario::whereUrl($url)
            ->full()
            ->first();

        $data = [
            'user' => $user,
            'col_config' => 'col-xs-8 col-xs-offset-2'
        ];
        // return response()->json($data);

        return view('cvs.linkedin', $data);


    }

    public function pdf($url)
    {
        $user = Usuario::whereUrl($url)
            ->full()
            ->first();

        $data = [
            'user' => $user,
            'col_config' => 'col-xs-12'
        ];

        return PDF::loadview('cvs.linkedin', $data)
            ->setOption('dpi', 200)
            ->setOption('margin-bottom', 0)
            ->setOption('margin-left', 0)
            ->setOption('margin-top', 0)
            ->setOption('margin-right', 0)
            ->setOption('page-height', 297)
            ->setOption('page-width', 210)
            // ->setOption('javascript-delay', 1000)
            ->inline('github.pdf');
    }
}
