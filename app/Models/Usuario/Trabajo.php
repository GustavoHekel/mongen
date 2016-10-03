<?php

namespace App\Models\Usuario;

use Illuminate\Database\Eloquent\Model;

class Trabajo extends Model
{
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

}
