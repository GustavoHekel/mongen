<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

use App\Models\Usuario;
use App\Models\Usuario\Trabajo;

class TrabajoPolicy
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
     * Determinar si el Trabajo puede ser visto por el usuario.
     *
     * @param  \App\Usuario  $user
     * @param  \App\Usuario\Trabajo  $trabajo
     * @return bool
     */
    public function ver(Usuario $usuario, Trabajo $trabajo)
    {
        return $usuario->id_usuario === $trabajo->id_usuario;
    }

    /**
     * Determinar si el Trabajo puede ser editado por el usuario.
     *
     * @param  \App\Usuario  $user
     * @param  \App\Usuario\Trabajo  $trabajo
     * @return bool
     */
    public function editar(Usuario $usuario, Trabajo $trabajo)
    {
        return $usuario->id_usuario === $trabajo->id_usuario;
    }

    /**
     * Determinar si el Trabajo puede ser eliminado por el usuario.
     *
     * @param  \App\Usuario  $user
     * @param  \App\Usuario\Trabajo  $trabajo
     * @return bool
     */
    public function eliminar(Usuario $usuario, Trabajo $trabajo)
    {
        return $usuario->id_usuario === $trabajo->id_usuario;
    }

}
