<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    public function permissionRole()
	{
    	return $this->belongsTo('App\RolePermission','permission_id');
	}
}
