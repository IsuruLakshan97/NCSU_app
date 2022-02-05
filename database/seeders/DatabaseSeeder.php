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
            ['id'=> 1, 'name'=>'Faculty of Agriculture', 'facultyCode'=>'FOAG'],
            ['id'=> 2, 'name'=>'Faculty of Arts', 'facultyCode'=>'FOA'],
            ['id'=> 3, 'name'=>'Faculty of Dental Sciences', 'facultyCode'=>'FOD'],
            ['id'=> 4, 'name'=>'Faculty of Engineering', 'facultyCode'=>'FOE'],
            ['id'=> 5, 'name'=>'Faculty of Medicine', 'facultyCode'=>'FOMED'],
            ['id'=> 6, 'name'=>'Faculty of Science', 'facultyCode'=>'FOS'],
            ['id'=> 7, 'name'=>'Faculty of Veterinary Medicine and Animal Science', 'facultyCode'=>'FOV'],
            ['id'=> 8, 'name'=>'Faculty of Allied Health Sciences', 'facultyCode'=>'FOAHS'],
            ['id'=> 9, 'name'=>'Faculty of Management', 'facultyCode'=>'FOM']
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
            ['name'=>'admin','username'=>'admin','email'=>'admin@admin.com', 'password'=>'$2a$12$05NtOHr3R1lzeMptuR0b0.vssg.nnt0S.UzX8GwuRSaqEeWS.CIRS','remark'=>'Superadmin user','active'=>1,'is_admin'=>1, 'faculty_id'=> 4],
            ['name'=>'user','username'=>'user','email'=>'user@user.com', 'password'=>'$2a$12$05NtOHr3R1lzeMptuR0b0.vssg.nnt0S.UzX8GwuRSaqEeWS.CIRS','remark'=>'admin user','active'=>1,'is_admin'=>0, 'faculty_id'=> 3],
            ['name'=>'test','username'=>'test','email'=>'test@test.com', 'password'=>'$2a$12$05NtOHr3R1lzeMptuR0b0.vssg.nnt0S.UzX8GwuRSaqEeWS.CIRS','remark'=>'Superadmin user','active'=>1,'is_admin'=>1, 'faculty_id'=> 2],
            ['name'=>'lucifer','username'=>'lucifer','email'=>'lucifer@lucifer.com', 'password'=>'$2a$12$05NtOHr3R1lzeMptuR0b0.vssg.nnt0S.UzX8GwuRSaqEeWS.CIRS','remark'=>'admin user','active'=>1,'is_admin'=>0, 'faculty_id'=> 1],
        ];

        // If the table faculties has no data, seed them with dummy data
        if (DB::table('users')->count() == 0) {
            DB::table('users')->insert($user_list);
        }

        $people_list = [
            ['fname'=>'isuru','lname'=>'lakshan','fullname'=>'isuru lakshan', 'initial'=>'S.A.I Lakshan','address'=> '440/1/A, Highlevel road,Kottawa,Markumbura,Pannipitiya','city'=>'Kottawa','date'=>'1997-06-04', 'regNo'=> 'E/16/203', 'image'=> 'C:\wamp64\tmp\php170A.tmp', 'faculty_id'=> 4, 'image'=> 4, 'department_id'=>3],
            ['fname'=>'Madushan','lname'=>'chandula','fullname'=>'Madushan Chandula', 'initial'=>'J.P.D.M Chandula','address'=> '440/1/A, Highlevel road,Kottawa,Markumbura,Pannipitiya','city'=>'Maharagama','date'=>'1998-01-04', 'regNo'=> 'E/16/061', 'image'=> 'C:\wamp64\tmp\phpD8F0.tmp', 'faculty_id'=> 4, 'image'=> 4, 'department_id'=>3],
            ['fname'=>'Aruna','lname'=>'Nuwantha','fullname'=>'Aruna Nuwantha', 'initial'=>'A. Nuwantha','address'=> '440/1/A, Highlevel road,Kottawa,Markumbura,Pannipitiya','city'=>'Kurunegala','date'=>'1997-08-04', 'regNo'=> 'E/16/261', 'image'=> 'C:\wamp64\tmp\php2BED.tmp', 'faculty_id'=> 4, 'image'=> 4, 'department_id'=>3],
        ];

        // If the table faculties has no data, seed them with dummy data
        if (DB::table('people')->count() == 0) {
            DB::table('people')->insert($people_list);
        }

        $verifieddata_list = [
            ['fname'=>'isuru','lname'=>'lakshan','fullname'=>'isuru lakshan', 'initial'=>'S.A.I Lakshan','address'=> '440/1/A, Highlevel road,Kottawa,Markumbura,Pannipitiya','city'=>'Kottawa','date'=>'1997-06-04', 'regNo'=> 'E/16/203', 'image'=> 'C:\Users\Isuru\Downloads', 'faculty_id'=> 4, 'image'=> 4, 'department_id'=>3],
            ['fname'=>'Madushan','lname'=>'chandula','fullname'=>'Madushan Chandula', 'initial'=>'J.P.D.M Chandula','address'=> '440/1/A, Highlevel road,Kottawa,Markumbura,Pannipitiya','city'=>'Maharagama','date'=>'1998-01-04', 'regNo'=> 'E/16/061', 'image'=> 'C:\Users\Isuru\Downloads', 'faculty_id'=> 4, 'image'=> 4, 'department_id'=>3],
            ['fname'=>'Aruna','lname'=>'Nuwantha','fullname'=>'Aruna Nuwantha', 'initial'=>'A. Nuwantha','address'=> '440/1/A, Highlevel road,Kottawa,Markumbura,Pannipitiya','city'=>'Kurunegala','date'=>'1997-08-04', 'regNo'=> 'E/16/261', 'image'=> 'C:\Users\Isuru\Downloads', 'faculty_id'=> 4, 'image'=> 4, 'department_id'=>3],
        ];

        if (DB::table('verified_data')->count() == 0) {
            //DB::table('verified_data')->insert($verifieddata_list);
        }
    }
}
