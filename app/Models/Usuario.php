<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Usuario extends Model implements AuthenticatableContract, CanResetPasswordContract
{
	use Authenticatable, CanResetPassword;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sistema.usuarios';

    /**
     * Traigo el estado actual del usuario 
     * con la relación "estado".
     * @param null
     * @return null
     */
    public function estado(){
    	return $this->hasOne('App\Models\Usuario\Estado', 'usuario', 'id');
    }

    /**
     * Traigo los estudios del usuario 
     * con la relación "estudios".
     * @param null
     * @return null
     */
    public function estudios(){
        return $this->hasMany('App\Models\Usuario\Estudio', 'usuario', 'id');
    }
}
