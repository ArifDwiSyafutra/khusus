<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //membuat role admin
        $adminRole = new Role();
        $adminRole->name="admin";
        $adminRole->display_name = "Admin";
        $adminRole->save();

        //Membuat role Member

        $memberRole = new Role();
        $memberRole->name = "member";
        $memberRole->display_name = "Member";
        $memberRole->save();

        // membuat samplle admin
        $admin = new User();
        $admin->name = 'AdminLaraWeb';
        $admin->email = 'arifdwi286@gmail.com';
        $admin->password = bcrypt('smd210168');
        $admin->is_verified = 1;
        $admin->save();
        $admin->attachRole($adminRole);


        // Membur sampple Member
        $member = new User();
        $member->name = 'Rizky';
        $member->email = 'scnhyti@gmail.com';
        $member->password=bcrypt('member');
         $member->is_verified = 1;
        $member->save();
        $member->attachRole($memberRole);

    }
}
