<?php

namespace App\Models\Usuario;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Auth;

class Trabajo extends Model
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
    protected $table = 'cvs.trabajos';

    /**
	 * The table's primary key
	 *
	 * @var string
	 */
	protected $primaryKey = 'id_trabajo';

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
    protected $appends = ['year_from', 'year_to', 'month_from', 'month_to'];

    /*
    |--------------------------------------------------------------------------
    | Mutators
    |--------------------------------------------------------------------------
    */

    /**
     * Set the place attribute
     *
     * @param string $value place
     */
    public function setLugarAttribute($value)
    {
        $this->attributes['lugar'] = mb_strtoupper($value);
    }

    /**
     * Set the position attribute
     *
     * @param string $value position
     */
    public function setPuestoAttribute($value)
    {
        $this->attributes['puesto'] = mb_strtoupper($value);
    }

    /**
     * Set the detail attribute
     *
     * @param string $value detail
     */
    public function setDetalleAttribute($value)
    {
        $this->attributes['detalle'] = mb_strtoupper($value);
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
     * [getMonthFromAttribute description]
     * @return [type] [description]
     */
    public function getMonthFromAttribute()
    {
        return $this->attributes['month_from'] = substr($this->desde, 4, 2);
    }

    /**
     * [getYearToAttribute description]
     * @return [type] [description]
     */
    public function getYearToAttribute()
    {
        return $this->attributes['year_to'] = substr($this->hasta, 0, 4) ?: null;
    }

    /**
     * [getMonthFromAttribute description]
     * @return [type] [description]
     */
    public function getMonthToAttribute()
    {
        return $this->attributes['month_to'] = substr($this->hasta, 4, 2);
    }

    /**
     * [getFromAttribute description]
     * @return [type] [description]
     */
    public function getDetalleAttribute($value)
    {
        return $this->attributes['detalle'] = str_limit(mb_strtolower($value), 250);
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
