<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sistema.provincias';

    /**
	 * The table's primary key
	 *
	 * @var string
	 */
	protected $primaryKey = 'id_provincia';

    /**
     * [scopeFromCountry description]
     * @param  [type] $query   [description]
     * @param  [type] $id_pais [description]
     * @return [type]          [description]
     */
    public function scopeFromCountry($query, $id_pais)
    {
        return $query->where('id_pais', $id_pais);
    }
}
