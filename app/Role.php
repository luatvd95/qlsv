<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function rolePermission()
	{
    	return $this->belongsTo('App\RolePermission','role_id');
	}
}
