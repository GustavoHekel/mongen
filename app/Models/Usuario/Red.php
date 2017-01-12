<?php

namespace App\Models\Usuario;

use Illuminate\Database\Eloquent\Model;

use Auth;

class Red extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cvs.intereses';

    /**
	 * The table's primary key
	 *
	 * @var string
	 */
	protected $primaryKey = 'id_interes';

    /**
     * [setFacebookAttribute description]
     * @param [type] $value [description]
     */
    public function setFacebookAttribute($value)
    {
        $this->attributes['facebook'] = mb_strtoupper($value);
    }

    /**
     * [setTwitterAttribute description]
     * @param [type] $value [description]
     */
    public function setTwitterAttribute($value)
    {
        $this->attributes['twitter'] = mb_strtoupper($value);
    }

    /**
     * [setLinkedinAttribute description]
     * @param [type] $value [description]
     */
    public function setLinkedinAttribute($value)
    {
        $this->attributes['linkedin'] = mb_strtoupper($value);
    }

    /**
     * [setGoogleAttribute description]
     * @param [type] $value [description]
     */
    public function setGoogleAttribute($value)
    {
        $this->attributes['google'] = mb_strtoupper($value);
    }

    /**
     * [setGithubAttribute description]
     * @param [type] $value [description]
     */
    public function setGithubAttribute($value)
    {
        $this->attributes['github'] = mb_strtoupper($value);
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
