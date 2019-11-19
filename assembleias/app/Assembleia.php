<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Assembleia.
 *
 * @author  The scaffold-interface created at 2019-11-08 03:41:25pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Assembleia extends Model
{
	
	
    protected $table = 'assembleias';

	
	public function municipio()
	{
		return $this->belongsTo('App\Municipio','municipio_id');
	}

	

	/**
     * user.
     *
     * @return  \Illuminate\Support\Collection;
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    /**
     * Assign a user.
     *
     * @param  $user
     * @return  mixed
     */
    public function assignUser($user)
    {
        return $this->users()->attach($user);
    }
    /**
     * Remove a user.
     *
     * @param  $user
     * @return  mixed
     */
    public function removeUser($user)
    {
        return $this->users()->detach($user);
    }


}
