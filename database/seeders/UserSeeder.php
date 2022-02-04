<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
    }
}
