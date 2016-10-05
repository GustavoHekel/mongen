<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

use App\Models\Usuario;
use App\Models\Usuario\Estudio;

class EstudioPolicy
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
     * Determinar si el estudio puede ser visto por el usuario.
     *
     * @param  \App\Usuario  $user
     * @param  \App\Usuario\Estudio  $post
     * @return bool
     */
    public function ver(Usuario $usuario, Estudio $estudio)
    {
        return $usuario->id_usuario === $estudio->id_usuario;
    }

    /**
     * Determinar si el estudio puede ser editado por el usuario.
     *
     * @param  \App\Usuario  $user
     * @param  \App\Usuario\Estudio  $post
     * @return bool
     */
    public function editar(Usuario $usuario, Estudio $estudio)
    {
        return $usuario->id_usuario === $estudio->id_usuario;
    }

}
