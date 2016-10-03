<?php

namespace App\Models\Usuario;

use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cvs.idiomas';

    /**
	 * The table's primary key
	 *
	 * @var string
	 */
	protected $primaryKey = 'id_idioma';

}
