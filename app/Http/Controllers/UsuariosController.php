<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use App\Models\Usuario;
use App\Models\Usuario\MenuUsuario as Menu;

class UsuariosController extends Controller
{

	/**
	 * Recibe los datos del 
	 * formulario de login.
	 * @param $r Request
	 * @return bool
	 */
	public function postLogin(Request $r){

		if (Auth::attempt(['email' => $r->email , 'password' => $r->pass])){
			return redirect()->intended('dashboard');
		} else {
        	$data = [
        		'errors' => [
        			'Falló la autenticación, revise sus datos'
        		]
        	];
        	return redirect('login')->with($data);
		}
	}

	/**
	 * Devuelve la vista del dashboard
	 * @param null
	 * @return null
	 */
	public function getDashboard(){
		$menu = Menu::all();
		$data = [
			'items' => $menu
		];

		return view('user-site.index' , $data);
	}

}

