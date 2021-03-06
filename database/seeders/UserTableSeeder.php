<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name', 'user')->first();
        $role_admin = Role::where('name', 'admin')->first();
        $role_student = Role::where('name', 'student')->first();

        $user = new User();
        $user->name = 'User';
        $user->email = 'user@example.com';
        $user->password = bcrypt('secret');
        $user->avatar='default.png';
        $user->save();
        $user->roles()->attach($role_user);

        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@example.com';
        $user->password = bcrypt('secret');
        $user->avatar='default.png';
        $user->save();
        $user->roles()->attach($role_admin);

        $user = new User();
        $user->name = 'Pepito';
        $user->email = 'pepito@example.com';
        $user->password = bcrypt('123456');
        $user->avatar='default.png';
        $user->save();
        $user->roles()->attach($role_student);
    }
}
