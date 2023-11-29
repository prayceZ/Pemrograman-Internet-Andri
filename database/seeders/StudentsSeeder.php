<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsSeeder extends Seeder
{
    public function run()
    {
        DB::table('students')->insert([
            ['name' => 'Andri', 'age' => 20, 'classroom' => 'PTI A'],
            ['name' => 'AFIV', 'age' => 21, 'classroom' => 'PTI B'],
            ['name' => 'Yanto', 'age' => 22, 'classroom' => 'PTI C'],
            ['name' => 'Valerr', 'age' => 23, 'classroom' => 'PTI D'],
            ['name' => 'Nurul', 'age' => 24, 'classroom' => 'PTI E'],
        ]);
    }
}

