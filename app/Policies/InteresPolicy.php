<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

use App\Models\Usuario;
use App\Models\Usuario\Interes;

class InteresPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determinar si el interes puede ser visto por el usuario.
     *
     * @param  \App\Usuario  $user
     * @param  \App\Usuario\Interes  $interes
     * @return bool
     */
    public function ver(Usuario $usuario, Interes $interes)
    {
        return $usuario->id_usuario === $interes->id_usuario;
    }

    /**
     * Determinar si el interes puede ser editado por el usuario.
     *
     * @param  \App\Usuario  $user
     * @param  \App\Usuario\Interes  $interes
     * @return bool
     */
    public function editar(Usuario $usuario, Interes $interes)
    {
        return $usuario->id_usuario === $interes->id_usuario;
    }

    /**
     * Determinar si el interes puede ser eliminado por el usuario.
     *
     * @param  \App\Usuario  $user
     * @param  \App\Usuario\Interes  $interes
     * @return bool
     */
    public function eliminar(Usuario $usuario, Interes $interes)
    {
        return $usuario->id_usuario === $interes->id_usuario;
    }
}
