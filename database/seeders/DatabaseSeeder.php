<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
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

        $department_list = [
            ['name'=> 'Department of Chemical & Process Engineering', 'faculty_id'=> 4],
            ['name'=> 'Department of Civil Engineering', 'faculty_id'=> 4],
            ['name'=> 'Department of Computer Engineering', 'faculty_id'=> 4],
            ['name'=> 'Department of Electrical & Electronic Engineering', 'faculty_id'=> 4],
            ['name'=> 'Department of Engineering Mathematics', 'faculty_id'=> 4],
            ['name'=> 'Department of Mechanical Engineering', 'faculty_id'=> 4],
            ['name'=> 'Department of Manufacturing & Industrial Engineering', 'faculty_id'=> 4],
            ['name'=> 'Department of Engineering Management', 'faculty_id'=> 4]
        ];

        // If the table departments has no data, seed them with dummy data
        if (DB::table('departments')->count() == 0) {
            DB::table('departments')->insert($department_list);
        }

        $user_list = [
            [],
        ];
    }
}
