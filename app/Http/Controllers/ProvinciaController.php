<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Cache;

use App\Models\Provincia;

class ProvinciaController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id_pais
     * @return \Illuminate\Http\Response
     */
    public function show($id_pais)
    {
        $provincias = Provincia::fromCountry($id_pais)->get();
        return response()->success(compact('provincias'));
    }
}
