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
	 * The table's primary key
	 *
	 * @var string
	 */
	protected $primaryKey = 'id_usuario';

    /**
     * Traigo el estado actual del usuario
     * con la relación "estado".
     * @param null
     * @return null
     */
    public function estado(){
    	return $this->hasOne('App\Models\Usuario\Estado', 'id_usuario', 'id_usuario');
    }

    /**
     * Traigo los estudios del usuario
     * con la relación "estudios".
     * @param null
     * @return null
     */
    public function estudios(){
        return $this->hasMany('App\Models\Usuario\Estudio', 'id_usuario', 'id_usuario');
    }
}
