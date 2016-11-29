<?php

namespace App\Models\Usuario;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cvs.skills';

    /**
	 * The table's primary key
	 *
	 * @var string
	 */
	protected $primaryKey = 'id_skill';

}
