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
    protected $table = 'usuarios';

	/**
	 * The table's primary key
	 */
	protected $primaryKey = 'id_usuario';

	/**
     * The attributes that should be mutated to dates.
     */
    protected $dates = ['created_at', 'updated_at', 'fecha_nacimiento', 'fecha_vencimiento', 'fecha_validado'];

	/**
	 * Attributes to append to JSON
	 */
	protected $appends = [];

	/**
	 * Relationships
	 */
	public $relationships = [
		'estudios',
		'trabajos',
		'cursos'
	];

	/*
    |--------------------------------------------------------------------------
    | Mutators
    |--------------------------------------------------------------------------
    */

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

	/**
	 * Devuelve el telefono
	 */
	public function telefono()
	{
		return $this->hasOne('App\Models\Usuario\Telefono', 'id_usuario', 'id_usuario');
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
		return $query->with($this->relationships);
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
}
