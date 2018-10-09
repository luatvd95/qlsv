<?php

namespace App\Http\Controllers;

use App\Repositories\StudentRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
	protected $student;
	public function __construct(StudentRepository $student)
	{
		$this->student=$student;
	}

	public function index()
	{
    	return view('admin.index',['title'=>'Students']);
	}

	public function view()
	{
		$profile=$this->student->getProfile();
		return view('admin.profile',['title'=>'profile','profile'=>$profile]);
	}
}
