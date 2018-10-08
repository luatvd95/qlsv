<?php

use Illuminate\Database\Seeder;

class SinhvienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            [
                'name'=>'luat',
                'address'=>'Ha noi',
                'age'=>18
            ],
            [
                'name'=>'Nhan',
                'address'=>'Ha noi',
                'age'=>24
            ],
            [
                'name'=>'Huong',
                'address'=>'Thai Binh',
                'age'=>24
            ],
            [
                'name'=>'Hang',
                'address'=>'Phu Tho',
                'age'=>29
            ],
            [
                'name'=>'Tu',
                'address'=>'Thanh Hoa',
                'age'=>30
            ],
            [
                'name'=>'Hoang',
                'address'=>'Quang Ninh',
                'age'=>18
            ],
            [
                'name'=>'Quynh',
                'address'=>'Ha noi',
                'age'=>19
            ],

        ];
        foreach ($data as $row){
            \App\Models\Sinhvien::create($row);
        }
    }
}
