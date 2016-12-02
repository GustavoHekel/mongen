<?php

namespace App\Models\Usuario;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Auth;

class Estudio extends Model
{
    use SoftDeletes;

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
     * Set the career attribute
     *
     * @param string $value career
     */
    public function setCarreraAttribute($value)
    {
        $this->attributes['carrera'] = mb_strtoupper($value);
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
