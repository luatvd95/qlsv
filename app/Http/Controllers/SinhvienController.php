<?php

namespace App\Http\Controllers;

use App\Repositories\SinhvienRepository;
use Illuminate\Http\Request;

class SinhvienController extends Controller
{
    protected $sinhvien;

    public function __construct(SinhvienRepository $sinhvien)
    {
        $this->sinhvien = $sinhvien;
    }

    public function index()
    {
       return $this->sinhvien->all();
    }

}
