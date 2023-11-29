<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesSeeder extends Seeder
{
    public function run()
    {
        DB::table('courses')->insert([
            ['course_name' => 'Matematika', 'description' => 'Deskripsi Matematika'],
            ['course_name' => 'Bahasa Inggris', 'description' => 'Deskripsi Bahasa Inggris'],
            ['course_name' => 'Fisika', 'description' => 'Deskripsi Fisika'],
        ]);
    }
}
