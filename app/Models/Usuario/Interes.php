<?php

namespace App\Models\Usuario;

use Illuminate\Database\Eloquent\Model;

use Auth;

class Interes extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cvs.intereses';

    /**
	 * The table's primary key
	 *
	 * @var string
	 */
	protected $primaryKey = 'id_interes';

    /**
     * [setNombre description]
     *
     * @param [type] $value [description]
     */
    public function setNombreAttribute($value)
    {
        $this->attributes['nombre'] = mb_strtoupper($value);
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
