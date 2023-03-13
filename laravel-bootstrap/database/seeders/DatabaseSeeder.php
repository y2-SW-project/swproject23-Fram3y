<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\CinemaSeeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\MovieSeeder;
use Database\Seeders\GenreSeeder;
use Database\Seeders\ScreenSeeder;
use Database\Seeders\UserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CinemaSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(GenreSeeder::class);
        $this->call(MovieSeeder::class);
        $this->call(ScreenSeeder::class);
        $this->call(UserSeeder::class);
    }
}
