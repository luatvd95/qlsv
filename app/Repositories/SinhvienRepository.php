<?php
namespace App\Repositories;

use App\Models\Sinhvien;
use App\Repositories\RepositoryInterface;

class SinhvienRepository implements RepositoryInterface
{
    public function all()
    {
        $data = Sinhvien::all();
        return $data;
    }
    public function find($id)
    {

        $data = Sinhvien::find($id);
        return $data;
    }

}
