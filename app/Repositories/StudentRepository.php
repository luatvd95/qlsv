<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 09/10/2018
 * Time: 13:58
 */

namespace App\Repositories;


use App\User;
use Illuminate\Support\Facades\Auth;

class StudentRepository implements RepositoryInterface
{
	public function all()
	{
		// TODO: Implement all() method.
	}

	public function find($id)
	{
		$user = User::find($id);

		return $user;
	}

	public function getName()
	{
		$name_student = $this->find(Auth::id())->userStudent->name;

		return $name_student;
	}

	public function getProfile()
	{
		$profile_user = $this->find(Auth::id());
		$profile_student=$profile_user->userStudent;
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
