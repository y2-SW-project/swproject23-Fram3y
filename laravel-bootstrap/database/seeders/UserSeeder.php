<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = 'Sam Downey';
        $user->email = 'samdowney@larafest.ie';
        $user->password = 'n00212512!';
        $user->role_id = '1';
        $user->save();

        $user = new User();
        $user->name = 'John Corrigan';
        $user->email = 'johncorrigan@larafest.ie';
        $user->password = 'castles1!';
        $user->role_id = '2';
        $user->save();
    }
}
