<?php

namespace App\Models\Usuario;

use Illuminate\Database\Eloquent\Model;

use Auth;

class Red extends Model
{
    /*
    |--------------------------------------------------------------------------
    | Properties
    |--------------------------------------------------------------------------
    */

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'redes_sociales';

    /**
	 * The table's primary key
	 *
	 * @var string
	 */
	protected $primaryKey = 'id_red_usuario';

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['redes'];

    /*
    |--------------------------------------------------------------------------
    | Mutators
    |--------------------------------------------------------------------------
    */

    /**
     * [setFacebookAttribute description]
     * @param [type] $value [description]
     */
    public function setFacebookAttribute($value)
    {
        $this->attributes['facebook'] = mb_strtolower($value);
    }

    /**
     * [setTwitterAttribute description]
     * @param [type] $value [description]
     */
    public function setTwitterAttribute($value)
    {
        $this->attributes['twitter'] = mb_strtolower($value);
    }

    /**
     * [setLinkedinAttribute description]
     * @param [type] $value [description]
     */
    public function setLinkedinAttribute($value)
    {
        $this->attributes['linkedin'] = mb_strtolower($value);
    }

    /**
     * [setGoogleAttribute description]
     * @param [type] $value [description]
     */
    public function setGoogleAttribute($value)
    {
        $this->attributes['google'] = mb_strtolower($value);
    }

    /**
     * [setGithubAttribute description]
     * @param [type] $value [description]
     */
    public function setGithubAttribute($value)
    {
        $this->attributes['github'] = mb_strtolower($value);
    }

    /*
    |--------------------------------------------------------------------------
    | Accessor
    |--------------------------------------------------------------------------
    */

    /**
     * [redes description]
     * @return [type] [description]
     */
    public function getRedesAttribute()
    {
        $redes = [
            'facebook' => $this->facebook,
            'twitter' => $this->twitter,
            'linkedin' => $this->linkedin,
            'google' => $this->google,
            'github' => $this->github
        ];

        return $this->attributes['redes'] = json_decode(json_encode($redes));
    }

    /*
    |--------------------------------------------------------------------------
    | Query scopes
    |--------------------------------------------------------------------------
    */

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
