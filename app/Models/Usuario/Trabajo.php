<?php

namespace App\Models\Usuario;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Auth;

class Trabajo extends Model
{
    use SoftDeletes;

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
