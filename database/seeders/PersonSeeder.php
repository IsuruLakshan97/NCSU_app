<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $people_list = [
            ['fname'=>'isuru','lname'=>'lakshan','fullname'=>'isuru lakshan', 'initial'=>'S.A.I Lakshan','address'=> '440/1/A, Highlevel road,Kottawa,Markumbura,Pannipitiya','city'=>'Kottawa','date'=>'1997-06-04', 'regNo'=> 'E/16/203', 'image'=> 'C:\wamp64\tmp\php170A.tmp', 'faculty_id'=> 4, 'image'=> 4, 'department_id'=>3],
            ['fname'=>'Madushan','lname'=>'chandula','fullname'=>'Madushan Chandula', 'initial'=>'J.P.D.M Chandula','address'=> '440/1/A, Highlevel road,Kottawa,Markumbura,Pannipitiya','city'=>'Maharagama','date'=>'1998-01-04', 'regNo'=> 'E/16/061', 'image'=> 'C:\wamp64\tmp\phpD8F0.tmp', 'faculty_id'=> 4, 'image'=> 4, 'department_id'=>3],
            ['fname'=>'Aruna','lname'=>'Nuwantha','fullname'=>'Aruna Nuwantha', 'initial'=>'A. Nuwantha','address'=> '440/1/A, Highlevel road,Kottawa,Markumbura,Pannipitiya','city'=>'Kurunegala','date'=>'1997-08-04', 'regNo'=> 'E/16/261', 'image'=> 'C:\wamp64\tmp\php2BED.tmp', 'faculty_id'=> 4, 'image'=> 4, 'department_id'=>3],
        ];

        // If the table people has no data, seed them with dummy data
        if (DB::table('people')->count() == 0) {
            DB::table('people')->insert($people_list);
        }
    }
}
