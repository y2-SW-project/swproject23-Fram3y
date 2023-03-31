<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Screening;

class ScreeningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $screening = new Screening();
        $screening->date = "2023-4-14";
        $screening->time = "19:30:00";
        $screening->screen_id = "1";
        $screening->movie_id = "1";
        $screening->save();

        $screening = new Screening();
        $screening->date = "2023-4-13";
        $screening->time = "15:30:00";
        $screening->screen_id = "5";
        $screening->movie_id = "1";
        $screening->save();
    }
}
