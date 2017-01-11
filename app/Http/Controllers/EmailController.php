<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Usuario\Email as CvEmail;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $email = CvEmail::fromUser()->first();
        $data = [
            'email' => $email
        ];
        return view('user-site-pro.mi-cv.secciones.emails', $data);
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
        $cv = CvEmail::findOrFail($id);
        $cv->email = $request->email_contacto ?: $cv->email;
        $cv->email_registro = $request->email_default ?: 0;
        $cv->solo_email = $request->solo_email ?: 0;
        if ($cv->save()) {
            return response()->success(['data' => 'Datos actualizados']);
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
