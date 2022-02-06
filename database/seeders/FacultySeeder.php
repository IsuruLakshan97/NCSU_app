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
            ['id'=> 1, 'name'=>'Faculty of Agriculture', 'facultyCode'=>'FOAG'],
            ['id'=> 2, 'name'=>'Faculty of Arts', 'facultyCode'=>'FOA'],
            ['id'=> 3, 'name'=>'Faculty of Dental Sciences', 'facultyCode'=>'FOD'],
            ['id'=> 4, 'name'=>'Faculty of Engineering', 'facultyCode'=>'FOE'],
            ['id'=> 5, 'name'=>'Faculty of Medicine', 'facultyCode'=>'FOM'],
            ['id'=> 6, 'name'=>'Faculty of Science', 'facultyCode'=>'FOS'],
            ['id'=> 7, 'name'=>'Faculty of Veterinary Medicine and Animal Science', 'facultyCode'=>'FOV'],
            ['id'=> 8, 'name'=>'Faculty of Allied Health Sciences', 'facultyCode'=>'FOAHS'],
            ['id'=> 9, 'name'=>'Faculty of Management', 'facultyCode'=>'FOM']
        ];

        // If the table faculties has no data, seed them with dummy data
        if (DB::table('faculties')->count() == 0) {
            DB::table('faculties')->insert($faculty_list);
        }
    }
}
