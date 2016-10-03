<?php

namespace App\Models\Usuario;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cvs.estados_usuarios';

    /**
	 * The table's primary key
	 *
	 * @var string
	 */
	protected $primaryKey = 'id_estado';

}
