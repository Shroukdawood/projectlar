<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table(('students'))->insert([
           'name'=>'shrouk',
            'email'=>'shrouk@gmail',
            'address'=>'cairo',
            'status'=>'active',
            'phone'=>'012233', 
        ],
        [
         'name'=>'ahmed',
        'email'=>'ahmed@gmail',
        'address'=>'cairo',
        'status'=>'active',
        'phone'=>'012233',
        ],
        [
         'name'=>'mohamed',
        'email'=>'mohamed@gmail',
        'address'=>'cairo',
        'status'=>'active',
        'phone'=>'012233',
        ],
        [
         'name'=>'ali',
            'email'=>'ali@gmail',
            'address'=>'cairo',
            'status'=>'active',
            'phone'=>'012233',
        ],
        [
         'name'=>'sara',
            'email'=>'sara@gmail',
            'address'=>'cairo',
            'status'=>'active',
            'phone'=>'012233',
        ]
        );
    }
}
