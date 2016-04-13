<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Template01Controller extends Controller
{
    
     public function getTemplate(){
    	return view ('landing.templates.template01');
    }
    
}
