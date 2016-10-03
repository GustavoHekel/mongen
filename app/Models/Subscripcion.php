<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscripcion extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'servicios.subscripciones';

    /**
	 * The table's primary key
	 *
	 * @var string
	 */
	protected $primaryKey = 'id_subscripcion';

}
