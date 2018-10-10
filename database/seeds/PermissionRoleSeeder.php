<?php

use Illuminate\Database\Seeder;

class PermissionRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::beginTransaction();
        try {
        	$role = new \App\Role();
        	$role->title = 'Admin';
        	$role->save();

        	$permission = new \App\Permission();
        	$permission->title = 'xem thong tin';
        	$permission->name = 'view-profile';
        	$permission->save();

        	$role_permission = new \App\RolePermission();
        	$role_permission->role_id = $role->id;
        	$role_permission->permission_id = $permission->id;
        	$role_permission->save();

        	DB::commit();
		} catch (Exception $e) {
        	DB::rollBack();

        	return $e;
		}
    }
}

