<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

use Carbon\Carbon;
use Auth;

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

	/**
	 * Relationship names
	 */
	CONST RELATIONSHIPS = [
		'estudios',
		'trabajos',
		'cursos',
		'idiomas',
		'skills',
		'red',
		'pais',
		'provincia',
		'extracto'
	];

	/**
	 * Number of sections a user can have
	 */
	CONST MAX_SECTIONS = sizeof(self::RELATIONSHIPS);

	/**
	 * Percentage for each relationship
	 */
	CONST RELATIONSHIP_VALUE = self::MAX_SECTIONS / 100;

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
     */
    public function estado(){
    	return $this->hasOne('App\Models\Usuario\Estado', 'id_usuario', 'id_usuario');
    }

	/**
	 * Traigo las redes sociales del usuario
	 */
	public function red()
	{
		return $this->hasOne('App\Models\Usuario\Red', 'id_usuario', 'id_usuario');
	}

    /**
     * Traigo los estudios del usuario con la relación "estudios".
     */
    public function estudios()
	{
        return $this->hasMany('App\Models\Usuario\Estudio', 'id_usuario', 'id_usuario')->orderBy('desde', 'desc');
    }

	/**
	 * Traigo todos los trabajos
	 */
	public function trabajos()
	{
		return $this->hasMany('App\Models\Usuario\Trabajo', 'id_usuario', 'id_usuario')->orderBy('desde', 'desc');
	}

	/**
	 * Traigo todos los cursos
	 */
	public function cursos()
	{
		return $this->hasMany('App\Models\Usuario\Curso', 'id_usuario', 'id_usuario')->orderBy('desde', 'desc');
	}

	/**
	 * Traigo todos los idiomas
	 */
	public function idiomas()
	{
		return $this->hasMany('App\Models\Usuario\Idioma', 'id_usuario', 'id_usuario');
	}

	/**
	 * Traigo todos los skills
	 */
	public function skills()
	{
		return $this->hasMany('App\Models\Usuario\Skill', 'id_usuario', 'id_usuario');
	}

	/**
	 * Traigo todos los intereses
	 */
	public function intereses()
	{
		return $this->hasMany('App\Models\Usuario\Interes', 'id_usuario', 'id_usuario');
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

	/**
	 * Devuelve el extracto
	 */
	public function extracto()
	{
		return $this->hasOne('App\Models\Usuario\Extracto', 'id_usuario', 'id_usuario');
	}

	/*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    */

   /**
    * [scopeWhereUrl description]
    * @param  [type] $query [description]
    * @param  [type] $url   [description]
    * @return [type]        [description]
    */
	public function scopeWhereUrl($query, $url)
	{
		return $query->where('url', $url);
	}

	/**
	 * [scopeFull description]
	 * @param  [type] $query [description]
	 * @return [type]        [description]
	 */
	public function scopeFull($query)
	{
		return $query->with(self::RELATIONSHIPS);
	}

	/**
	 * [scopeMe description]
	 * @param  [type] $query [description]
	 * @return [type]        [description]
	 */
	public function scopeMe($query)
	{
		return $query->where('id_usuario', Auth::user()->id_usuario);
	}

	/*
	|--------------------------------------------------------------------------
	| Methods
	|--------------------------------------------------------------------------
	*/

	/**
	 * [progress description]
	 * @return [type] [description]
	 */
	public function progress()
	{

	}
}
