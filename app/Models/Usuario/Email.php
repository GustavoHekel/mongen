<?php

namespace App\Models\Usuario;

use Illuminate\Database\Eloquent\Model;

use Auth;

class Email extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cvs.emails';

    /**
	 * The table's primary key
	 *
	 * @var string
	 */
	protected $primaryKey = 'id_email';

    /**
     * Set the detail attribute
     *
     * @param string $value detail
     */
    public function setEmailAttribute($value)
    {
        $this->attributes['email'] = mb_strtolower($value);
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
