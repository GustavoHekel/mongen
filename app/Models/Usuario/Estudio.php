<?php

namespace App\Models\Usuario;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Auth;

class Estudio extends Model
{
    use SoftDeletes;

    /*
    |--------------------------------------------------------------------------
    | Properties
    |--------------------------------------------------------------------------
    */

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cvs.estudios';

    /**
	 * The table's primary key
	 *
	 * @var string
	 */
	protected $primaryKey = 'id_estudio';

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['year_from', 'year_to'];

    /*
    |--------------------------------------------------------------------------
    | Mutators
    |--------------------------------------------------------------------------
    */

    /**
     * Set the institute attribute
     *
     * @param string $value institute
     */
    public function setInstitutoAttribute($value)
    {
        $this->attributes['instituto'] = mb_strtoupper($value);
    }

    /**
     * Set the career attribute
     *
     * @param string $value career
     */
    public function setCarreraAttribute($value)
    {
        $this->attributes['carrera'] = mb_strtoupper($value);
    }

    /*
	|--------------------------------------------------------------------------
	| Acessors
	|--------------------------------------------------------------------------
	*/

    /**
     * [getFromAttribute description]
     * @return [type] [description]
     */
    public function getYearFromAttribute()
    {
        return $this->attributes['year_from'] = substr($this->desde, 0, 4);
    }

    /**
     * [getYearToAttribute description]
     * @return [type] [description]
     */
    public function getYearToAttribute()
    {
        return $this->attributes['year_to'] = substr($this->hasta, 0, 4) ?: null;
    }

    /*
    |--------------------------------------------------------------------------
    | Query scopes
    |--------------------------------------------------------------------------
    */

    /**
     * [scopeFromUser description]
     * @param  [type] $query [description]
     * @return [type]        [description]
     */
    public function scopeFromUser($query)
    {
        return $query->where('id_usuario', Auth::user()->id_usuario);
    }

}
