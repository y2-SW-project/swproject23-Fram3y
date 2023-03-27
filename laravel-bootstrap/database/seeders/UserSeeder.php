<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //get the admin role from the role table. later (line 31) attach this role to a user
        $role_admin = Role::where('name', 'admin')->first();

        //get the user role from the role table. Later (line 42) attach this role to a user
        $role_user = Role::where('name', 'user')->first();

        $admin = new User();
        $admin->name = 'Sam Downey';
        $admin->email = 'sam@larafest.ie';
        $admin->password = Hash::make('password');
        $admin->save();

        //attach this role to the user that was created above
        $admin->roles()->attach($role_admin);

        $user = new User();
        $user->name = 'John Jones';
        $user->email = 'john@larafest.ie';
        $user->password = Hash::make('password');
        $user->save();

        //attach the role to the user
        $user->roles()->attach($role_user);
    }
}

