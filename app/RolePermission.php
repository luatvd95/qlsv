<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RolePermission extends Model
{
    public function getPermission()
	{
    	return $this->hasMany('App\Permission','permission_id','id');
	}

	public function getRole()
	{
    	return $this->hasMany('App\Role','role_id','id');
	}
}
