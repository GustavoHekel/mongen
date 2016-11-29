<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

use App\Models\Usuario;
use App\Models\Usuario\Skill;

class SkillPolicy
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
     * Determinar si el skill puede ser visto por el usuario.
     *
     * @param  \App\Usuario  $user
     * @param  \App\Usuario\Skill  $skill
     * @return bool
     */
    public function ver(Usuario $usuario, Skill $skill)
    {
        return $usuario->id_usuario === $skill->id_usuario;
    }

    /**
     * Determinar si el skill puede ser editado por el usuario.
     *
     * @param  \App\Usuario  $user
     * @param  \App\Usuario\Skill  $skill
     * @return bool
     */
    public function editar(Usuario $usuario, Skill $skill)
    {
        return $usuario->id_usuario === $skill->id_usuario;
    }

    /**
     * Determinar si el skill puede ser eliminado por el usuario.
     *
     * @param  \App\Usuario  $user
     * @param  \App\Usuario\Skill  $skill
     * @return bool
     */
    public function eliminar(Usuario $usuario, Skill $skill)
    {
        return $usuario->id_usuario === $skill->id_usuario;
    }
}
