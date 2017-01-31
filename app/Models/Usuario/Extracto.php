<?php

namespace App\Models\Usuario;

use Illuminate\Database\Eloquent\Model;

class Extracto extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cvs.extractos';

    /**
	 * The table's primary key
	 *
	 * @var string
	 */
	protected $primaryKey = 'id_extracto';

    /*
    |--------------------------------------------------------------------------
    | Mutators
    |--------------------------------------------------------------------------
    */

    /**
     * [setProfesionAttribute description]
     * @param [type] $value [description]
     */
    public function setProfesionAttribute($value)
    {
        $this->attributes['profesion'] = mb_strtoupper($value);
    }

    /**
     * [setProfesionAttribute description]
     * @param [type] $value [description]
     */
    public function setExtractoAttribute($value)
    {
        $this->attributes['extracto'] = mb_strtoupper($value);
    }

    /*
    |--------------------------------------------------------------------------
    | Relationship
    |--------------------------------------------------------------------------
    */

    /**
     * [user description]
     * @return [type] [description]
     */
    public function user()
    {
       return $this->belongsTo('App\Models\Usuario', 'id_usuario', 'id_usuario');
    }
}
