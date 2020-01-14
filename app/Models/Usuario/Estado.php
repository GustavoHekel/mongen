<?php

namespace App\Models\Usuario;

use Illuminate\Database\Eloquent\Model;

use Auth;

class Estado extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'estados_usuarios';

    /**
	 * The table's primary key
	 *
	 * @var string
	 */
	protected $primaryKey = 'id_estado_usuario';

    /**
     * [scopeFromUser description]
     * @param  [type] $query [description]
     * @return [type]        [description]
     */
    public function scopeFromUser($query)
    {
        return $query->where('id_usuario', Auth::user()->id_usuario);
    }

    public function estado()
    {
        return $this->hasOne('App\Models\Estado', 'id_estado', 'id_estado');
    }
}
