<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sistema.secciones_cv';

    /**
	 * The table's primary key
	 *
	 * @var string
	 */
	protected $primaryKey = 'id_seccion';

}
