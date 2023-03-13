<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genre = new Genre();
        $genre->name = "Comdey";
        $genre->description = "This is a genre";
        $genre->save();

        $genre = new Genre();
        $genre->name = "Action";
        $genre->description = "This is a genre";
        $genre->save();

        $genre = new Genre();
        $genre->name = "Romance";
        $genre->description = "This is a genre";
        $genre->save();

        $genre = new Genre();
        $genre->name = "Horror";
        $genre->description = "This is a genre";
        $genre->save();

        $genre = new Genre();
        $genre->name = "Science Fiction";
        $genre->description = "This is a genre";
        $genre->save();

        $genre = new Genre();
        $genre->name = "Western";
        $genre->description = "This is a genre";
        $genre->save();

        $genre = new Genre();
        $genre->name = "Animation";
        $genre->description = "This is a genre";
        $genre->save();

        $genre = new Genre();
        $genre->name = "Thriler";
        $genre->description = "This is a genre";
        $genre->save();
    }
}
