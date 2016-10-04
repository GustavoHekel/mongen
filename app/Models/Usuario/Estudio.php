<?php

namespace App\Models\Usuario;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Estudio extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cvs.estudios';

    /**
	 * The table's primary key
	 *
	 * @var string
	 */
	protected $primaryKey = 'id_estudio';

    /**
     * Devuelve el campo "desde" con formato mes, dia
     */
    public function getDesdeAttribute($value)
    {
        return Carbon::createFromFormat('Ym', $value)->format('M, Y');
    }

    /**
     * Devuelve el campo "hasta" con formato mes, dia o "En curso"
     */
    public function getHastaAttribute($value)
    {
        if (is_null($value)) {
            return 'En curso';
        } else {
            return Carbon::createFromFormat('Ym', $value)->format('M, Y');
        }
    }
}
