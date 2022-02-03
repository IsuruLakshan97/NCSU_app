<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faculty_list = [
            ['id'=> 1, 'name'=>'Faculty of Agriculture'],
            ['id'=> 2, 'name'=>'Faculty of Arts'],
            ['id'=> 3, 'name'=>'Faculty of Dental Sciences'],
            ['id'=> 4, 'name'=>'Faculty of Engineering'],
            ['id'=> 5, 'name'=>'Faculty of Medicine'],
            ['id'=> 6, 'name'=>'Faculty of Science'],
            ['id'=> 7, 'name'=>'Faculty of Veterinary Medicine and Animal Science'],
            ['id'=> 8, 'name'=>'Faculty of Allied Health Sciences']
        ];

        // If the table faculties has no data, seed them with dummy data
        if (DB::table('faculties')->count() == 0) {
            DB::table('faculties')->insert($faculty_list);
        }
    }
}
