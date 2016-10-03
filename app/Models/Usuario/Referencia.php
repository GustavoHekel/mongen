<?php

namespace App\Models\Usuario;

use Illuminate\Database\Eloquent\Model;

class Referencia extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cvs.referencias';

    /**
	 * The table's primary key
	 *
	 * @var string
	 */
	protected $primaryKey = 'id_referencia';


    /**
     * Devuelve el referente
     * @return Json
     */
    public function referente(){
    	return $this->hasOne('App\Models\Usuario', 'id_usuario', 'id_referente');
    }
}
