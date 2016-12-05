<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

use App\Models\Usuario;
use App\Models\Usuario\Estado;

class estadoPolicy
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
     * Determinar si el estado puede ser visto por el usuario.
     *
     * @param  \App\Usuario  $user
     * @param  \App\Usuario\Estado  $estado
     * @return bool
     */
    public function ver(Usuario $usuario, Estado $estado)
    {
        return $usuario->id_usuario === $estado->id_usuario;
    }

    /**
     * Determinar si el estado puede ser editado por el usuario.
     *
     * @param  \App\Usuario  $user
     * @param  \App\Usuario\Estado  $estado
     * @return bool
     */
    public function editar(Usuario $usuario, Estado $estado)
    {
        return $usuario->id_usuario === $estado->id_usuario;
    }

    /**
     * Determinar si el estado puede ser eliminado por el usuario.
     *
     * @param  \App\Usuario  $user
     * @param  \App\Usuario\Estado  $estado
     * @return bool
     */
    public function eliminar(Usuario $usuario, Estado $estado)
    {
        return $usuario->id_usuario === $estado->id_usuario;
    }

}
