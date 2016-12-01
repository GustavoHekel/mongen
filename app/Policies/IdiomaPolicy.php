<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

use App\Models\Usuario;
use App\Models\Usuario\Idioma;

class IdiomaPolicy
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
     * Determinar si el idioma puede ser visto por el usuario.
     *
     * @param  \App\Usuario  $user
     * @param  \App\Usuario\Idioma  $idioma
     * @return bool
     */
    public function ver(Usuario $usuario, Idioma $idioma)
    {
        return $usuario->id_usuario === $idioma->id_usuario;
    }

    /**
     * Determinar si el idioma puede ser editado por el usuario.
     *
     * @param  \App\Usuario  $user
     * @param  \App\Usuario\Idioma  $idioma
     * @return bool
     */
    public function editar(Usuario $usuario, Idioma $idioma)
    {
        return $usuario->id_usuario === $idioma->id_usuario;
    }

    /**
     * Determinar si el idioma puede ser eliminado por el usuario.
     *
     * @param  \App\Usuario  $user
     * @param  \App\Usuario\Idioma  $idioma
     * @return bool
     */
    public function eliminar(Usuario $usuario, Idioma $idioma)
    {
        return $usuario->id_usuario === $idioma->id_usuario;
    }
}
