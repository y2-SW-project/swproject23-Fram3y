<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Movie;
use App\Models\Genre;

class MovieController extends Controller
{
    public function index()
    {
        // Definition of Movies and Genres
        $movies = Movie::paginate(10);
        $genres = Genre::all();

        return view('user.movies.index')->with('movies', $movies)->with('genres', $genres);
    }

    public function show(Movie $movie, Genre $genre)
    {
        return view('user.movies.show')->with('movie', $movie)->with('genre', $genre);
    }
}

