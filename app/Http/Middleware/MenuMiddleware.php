<?php

namespace App\Http\Middleware;

use Closure;
use Route;
use Auth;

use App\Classes\Menu;

class MenuMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $ruta = Route::getCurrentRoute()->getPath();
        $ruta = explode('/' , $ruta);
        $menu = Menu::getMenuUsuario($ruta[0]);
        $request->session()->put('menu', $menu);
        $request->session()->put('name', Auth::user()->nombre);
        return $next($request);
    }
}
