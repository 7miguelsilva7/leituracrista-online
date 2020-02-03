<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable
{
    use Notifiable;
    use Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'fone1', 'fone2', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

	/**
     * assembleia.
     *
     * @return  \Illuminate\Support\Collection;
     */
    public function assembleias()
    {
        return $this->belongsToMany('App\Assembleia');
    }

    /**
     * Assign a assembleia.
     *
     * @param  $assembleia
     * @return  mixed
     */
    public function assignAssembleia($assembleia)
    {
        return $this->assembleias()->attach($assembleia);
    }
    /**
     * Remove a assembleia.
     *
     * @param  $assembleia
     * @return  mixed
     */
    public function removeAssembleia($assembleia)
    {
        return $this->assembleias()->detach($assembleia);
    }
}