<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_name', 'email', 'password','role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function userStudent()
	{
    	return $this->hasOne('App\Models\student','user_id', 'id');
	}

	public function hasPermission(Permission $permission)
	{
		if($this->role) {
			if($this->role->permissons) {
				if($this->role->permissons->contains($permission)){
					return true;
				}
			}
		}
    	return false;
	}


}
