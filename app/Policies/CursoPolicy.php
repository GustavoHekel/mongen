<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

use App\Models\Usuario;
use App\Models\Usuario\Curso;

class cursoPolicy
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
     * Determinar si el curso puede ser visto por el usuario.
     *
     * @param  \App\Usuario  $user
     * @param  \App\Usuario\Curso  $curso
     * @return bool
     */
    public function ver(Usuario $usuario, Curso $curso)
    {
        return $usuario->id_usuario === $curso->id_usuario;
    }

    /**
     * Determinar si el curso puede ser editado por el usuario.
     *
     * @param  \App\Usuario  $user
     * @param  \App\Usuario\Curso  $curso
     * @return bool
     */
    public function editar(Usuario $usuario, Curso $curso)
    {
        return $usuario->id_usuario === $curso->id_usuario;
    }

    /**
     * Determinar si el curso puede ser eliminado por el usuario.
     *
     * @param  \App\Usuario  $user
     * @param  \App\Usuario\Curso  $curso
     * @return bool
     */
    public function eliminar(Usuario $usuario, Curso $curso)
    {
        return $usuario->id_usuario === $curso->id_usuario;
    }

}
