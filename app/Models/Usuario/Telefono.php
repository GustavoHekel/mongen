<?php

namespace App\Models\Usuario;

use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cvs.telefonos';

    /**
	 * The table's primary key
	 *
	 * @var string
	 */
	protected $primaryKey = 'id_telefono';
}
