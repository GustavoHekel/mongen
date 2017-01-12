<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

use App\Models\Usuario\Red as CvRed;

class RedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $red = CvRed::fromUser()->first();
        $data = [
            'red' => $red
        ];
        return view('user-site-pro.mi-cv.secciones.redes', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cv = CvRed::findOrNew($id);
        $cv->id_usuario = Auth::user()->id_usuario;
        $cv->facebook = $request->facebook ?: $cv->facebook;
        $cv->twitter = $request->twitter ?: $cv->twitter;
        $cv->linkedin = $request->linkedin ?: $cv->linkedin;
        $cv->google_plus = $request->google_plus ?: $cv->google_plus;
        $cv->github = $request->github ?: $cv->github;
        if ($cv->save()) {
            return response()->success(['data' => $cv]);
        } else {
            return response()->error(['data' => 'Error al actualizar datos']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
