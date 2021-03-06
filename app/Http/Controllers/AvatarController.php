<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use Auth;

use App\Models\Usuario;

use App\Classes\Cropper;

class AvatarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $cropper = new Cropper(
            ($r->file('avatar_src') !== null) ? $r->file('avatar_src') : null,
            $r->avatar_data,
            ($r->file('avatar_file') !== null) ? $r->file('avatar_file') : null
        );

        $response = array(
          'state'  => 200,
          'message' => $cropper->getMsg(),
          'result' => $cropper->getNewRoute()
        );

        $user = Auth::user();
        $user->avatar = $cropper->getNewFile();
        $user->save();

        return response()->json($response);
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
        //
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
