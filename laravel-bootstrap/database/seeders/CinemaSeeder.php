<?php

namespace Database\Seeders;

use App\Models\Cinema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CinemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cinema = new Cinema();
        $cinema->name = "IMC Dun Laoughaire";
        $cinema->address_line_1 = "Bloomfield Shopping Centre";
        $cinema->address_line_2 = "George's Street Lower";
        $cinema->town = "Dún Laoghaire";
        $cinema->county = "Dublin";
        $cinema->eircode = "NULL";
        $cinema->save();

        $cinema = new Cinema();
        $cinema->name = "Odeon Stillorgan";
        $cinema->address_line_1 = "Stillorgan Plaza";
        $cinema->address_line_2 = "Lower Kilmacud Rd";
        $cinema->town = "Stillorgan";
        $cinema->county = "Dublin";
        $cinema->eircode = "NULL";
        $cinema->save();

        $cinema = new Cinema();
        $cinema->name = "Retro Drive-in Movies";
        $cinema->address_line_1 = "Leopardstown Race Course";
        $cinema->address_line_2 = "M50 Exit 15";
        $cinema->town = "Stillorgan";
        $cinema->county = "Dublin";
        $cinema->eircode = "NULL";
        $cinema->save();

        $cinema = new Cinema();
        $cinema->name = "Movies @ Dundrum";
        $cinema->address_line_1 = "Dundrum Town Centre";
        $cinema->address_line_2 = "Sandyford Rd";
        $cinema->town = "Dundrum";
        $cinema->county = "Dublin";
        $cinema->eircode = "NULL";
        $cinema->save();
    }
}
