<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoTelefono extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sistema.tipo_telefono';

    /**
	 * The table's primary key
	 *
	 * @var string
	 */
	protected $primaryKey = 'id_tipo_telefono';
}
