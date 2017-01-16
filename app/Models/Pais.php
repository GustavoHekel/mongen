<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sistema.paises';

    /**
	 * The table's primary key
	 *
	 * @var string
	 */
	protected $primaryKey = 'id_pais';

    /*
	|--------------------------------------------------------------------------
	| Acessors
	|--------------------------------------------------------------------------
	*/

    /**
     * [getNombreAttribute description]
     * @param  [type] $value [description]
     * @return [type]        [description]
     */
    public function getNombreAttribute($value)
    {
        return strtolower($value);
    }
}
