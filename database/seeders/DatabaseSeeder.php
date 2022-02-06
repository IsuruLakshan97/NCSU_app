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
            ['name'=>'admin','username'=>'admin','email'=>'admin@admin.com', 'password'=>'$2a$12$05NtOHr3R1lzeMptuR0b0.vssg.nnt0S.UzX8GwuRSaqEeWS.CIRS','remark'=>'Superadmin user','active'=>1,'is_admin'=>1, 'faculty_id'=> 4],
            ['name'=>'user','username'=>'user','email'=>'user@user.com', 'password'=>'$2a$12$05NtOHr3R1lzeMptuR0b0.vssg.nnt0S.UzX8GwuRSaqEeWS.CIRS','remark'=>'admin user','active'=>1,'is_admin'=>0, 'faculty_id'=> 3],
            ['name'=>'test','username'=>'test','email'=>'test@test.com', 'password'=>'$2a$12$05NtOHr3R1lzeMptuR0b0.vssg.nnt0S.UzX8GwuRSaqEeWS.CIRS','remark'=>'Superadmin user','active'=>1,'is_admin'=>1, 'faculty_id'=> 2],
            ['name'=>'lucifer','username'=>'lucifer','email'=>'lucifer@lucifer.com', 'password'=>'$2a$12$05NtOHr3R1lzeMptuR0b0.vssg.nnt0S.UzX8GwuRSaqEeWS.CIRS','remark'=>'admin user','active'=>1,'is_admin'=>0, 'faculty_id'=> 1],
        ];

        // If the table users has no data, seed them with dummy data
        if (DB::table('users')->count() == 0) {
            DB::table('users')->insert($user_list);
        }

        $batch_list = [
            ['id'=>16, 'batch'=>'16 batch'],
            ['id'=>17, 'batch'=>'17 batch'],
            ['id'=>18, 'batch'=>'18 batch'],
            ['id'=>19, 'batch'=>'19 batch'],
            ['id'=>20, 'batch'=>'20 batch'],
        ];

        //if the table batches has no data, seed them with dummy data
        if (DB::table('batches')->count() == 0) {
            DB::table('batches')->insert($batch_list);
        }
    }
}
