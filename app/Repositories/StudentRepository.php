<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 09/10/2018
 * Time: 13:58
 */

namespace App\Repositories;

use Illuminate\Support\Facades\Auth;

class StudentRepository extends EloquentRepository implements StudentInterface
{
	public function getModel()
	{
		return \App\Models\student::class;
	}

	public function getProfile()
	{
		$profile_user = $this->find(Auth::id());

		$profile_student=$profile_user->userStudent;
		dd($profile_user);
		$data = [
			'name' => $profile_student->name,
			'email' => $profile_user->email,
			'birthday' => $profile_student->birthday,
			'address' => $profile_student->address,
			'age' => $profile_student->age,


		];

		return $data;
	}

}

