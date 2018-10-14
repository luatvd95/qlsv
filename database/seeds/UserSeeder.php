<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
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
			$user=new \App\User;
			$user->user_name='luatvd95';
			$user->email='nhoccon05061995@gmail.com';
			$user->password=Hash::make('123456');
			$user->role_id=1;
			$user->save();

			$student = new \App\Models\student;
			$student->name='Vu Duy Luat';
			$student->age=24;
			$student->address='Hung Yen';
			$student->birthday='1995-06-05';
			$student->user_id=$user->id;
			$student->save();

			DB::commit();
		} catch (Exception $e) {
    		DB::rollBack();

    		return $e;
		}
    }
}

