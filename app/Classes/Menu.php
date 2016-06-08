<?php

namespace App\Classes;

use Auth;
use Route;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use App\Models\Usuario\MenuUsuario;

class Menu {


	/**
	 * Constructor privado de la clase Menu
	 * para evitar que se instancie.
	 */
	private function __construct(){
	}

	/**
	 * Devuelve un array para armar el menú 
	 * y recibe la ruta actual para 
	 * asignarle la clase activo.
	 * @param string $route
	 * @return array
	 */
	public static function getMenuUsuario($route){
		$items = MenuUsuario::all();
		foreach ($items as $item){
			$item->activo = $item->ruta == $route ? 'active' : '';
		}
		return $items;
	}

}