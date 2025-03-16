<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            ['name' => 'Lanz', "age" => '21'],
            ['name' => 'Thomas', "age" => '22'],
            ['name' => 'Mark', "age" => '13'],
            ['name' => 'Peter', "age" => '23'],
            ['name' => 'Jacob', "age" => '20'],
        ]);
    }
}
