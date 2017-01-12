<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

use Carbon\Carbon;

class Usuario extends Model implements AuthenticatableContract, CanResetPasswordContract
{
	use Authenticatable, CanResetPassword;

	/*
    |--------------------------------------------------------------------------
    | Properties
    |--------------------------------------------------------------------------
    */

    /**
     * The table associated with the model.
     */
    protected $table = 'sistema.usuarios';

	/**
	 * The table's primary key
	 */
	protected $primaryKey = 'id_usuario';

	/**
     * The attributes that should be mutated to dates.
     */
    protected $dates = ['created_at', 'updated_at', 'fecha_nacimiento', 'fecha_vencimiento', 'fecha_validado'];

	/*
    |--------------------------------------------------------------------------
    | Mutators
    |--------------------------------------------------------------------------
    */

	/**
     * Set the user's birth date.
     *
     * @param  string  $value
     * @return string
     */
    public function setFechaNacimientoAttribute($value)
    {
        $this->attributes['fecha_nacimiento'] = Carbon::createFromFormat('d/m/Y', $value);
    }

	/**
     * Set the user's name.
     *
     * @param  string  $value
     * @return string
     */
    public function setNombreAttribute($value)
    {
        $this->attributes['nombre'] = mb_strtoupper($value);
    }

	/**
     * Set the user's url.
     *
     * @param  string  $value
     * @return string
     */
    public function setUrlAttribute($value)
    {
        $this->attributes['url'] = mb_strtolower($value);
    }

	/*
	|--------------------------------------------------------------------------
	| Acessors
	|--------------------------------------------------------------------------
	*/

	/*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    */

	/**
     * Traigo el estado actual del usuario con la relación "estado".
     * @param null
     * @return null
     */
    public function estado(){
    	return $this->hasOne('App\Models\Usuario\Estado', 'id_usuario', 'id_usuario');
    }

    /**
     * Traigo los estudios del usuario con la relación "estudios".
     * @param null
     * @return null
     */
    public function estudios(){
        return $this->hasMany('App\Models\Usuario\Estudio', 'id_usuario', 'id_usuario');
    }

	/**
	 * Devuelve el pais
	 */
	public function pais()
	{
		return $this->hasOne('App\Models\Pais', 'id_pais', 'id_pais');
	}

	/**
	 * Devuelve la provincia
	 */
	public function provincia()
	{
		return $this->hasOne('App\Models\Provincia', 'id_provincia', 'id_provincia');
	}

	/*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    */
	public function scopeWhereUrl($query, $url)
	{
		return $query->where('url', $url);
	}
}
