<?php

namespace App\Models\Usuario;

use Illuminate\Database\Eloquent\Model;

use Auth;

class Telefono extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'telefonos';

    /**
	 * The table's primary key
	 *
	 * @var string
	 */
	protected $primaryKey = 'id_telefono';

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
