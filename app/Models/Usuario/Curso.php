<?php

namespace App\Models\Usuario;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Auth;

class Curso extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cvs.cursos';

    /**
	 * The table's primary key
	 *
	 * @var string
	 */
	protected $primaryKey = 'id_curso';

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    /**
     * Set the institute attribute
     *
     * @param string $value institute
     */
    public function setInstitutoAttribute($value)
    {
        $this->attributes['instituto'] = mb_strtoupper($value);
    }

    /**
     * Set the course's name attribute
     *
     * @param string $value name
     */
    public function setNombreAttribute($value)
    {
        $this->attributes['nombre'] = mb_strtoupper($value);
    }

    /**
     * [scopeFromUser description]
     * @param  [type] $query [description]
     * @return [type]        [description]
     */
    public function scopeFromUser($query)
    {
        return $query->where('id_usuario', Auth::user()->id_usuario);
    }
}
