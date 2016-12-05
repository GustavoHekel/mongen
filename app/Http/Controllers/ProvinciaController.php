<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Cache;

use App\Models\Provincia;

class ProvinciaController extends Controller
{
    /**
     * [index description]
     * @return [type] [description]
     */
    public function index($id_pais)
    {
        $provincias = Cache::remember('provincias', 60, function() use($id_pais){
            return Provincia::fromCountry($id_pais);
        });

        return response()->success(['provincias' => $provincias]);
    }
}
