<?php

namespace App\Http\Controllers\Admin;

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
        // User Authentication
        $user = Auth::user();
        $user->authorizeRoles('admin');

        // Definintion of Movies
        $movies = Movie::all();

        // Route to home page
        return view('admin.movies.index')->with('movies', $movies);
    }

    public function create()
    {
        // User Authentication
        $user = Auth::user();
        $user->authorizeRoles('admin');

        // Definition of Movies And Genres
        $movies = Movie::all();
        $genres = Genre::all();

        // Re-Route to Create Page
        return view('admin.movies.create')->with('movies', $movies);
    }

    public function store(Request $request)
    {
        // User Authentication
        $user = Auth::user();
        $user->authorizeRoles('admin');

        // Movie Validation
        $request -> validate([
            'title' => 'required|max:255',
            'movie_image' => 'required',
            'synopsis' => 'requred|max:255',
            'director' => 'required|max:255',
            'starring' => 'required|max:255',
            'release_date' => 'required',
            'genre_id' => 'required'
        ]);

        // Creating Variable For Movie Image And Extension
        $movie_image = $request->file('movie_image');
        $extension = $movie_image->getClientOriginalExtension();

        // Creating Unique File Name to Database
        $filename = date('Y-m-d-his') . '_' . $request->input('title') . '.' . $extension;

        // Pushing File With New Name to Images Folder
        $path = $movie_image->storeAs('public/images', $filename);

        // Create Block (Had a werid error with schema)
        $movie = new Movie;
        $movie->user_id = Auth::id();
        $movie->uuid = Str::uuid();
        $movie->title = $request->title;
        $movie->synopsis = $request->synopsis;
        $movie->director = $request->director;
        $movie->starring = $request->starring;
        $movie->release_date = $request->release_date;
        $movie->movie_image = $filename;
        $movie->genre_id = $request->genre_id;
        $movie->save();

        // Re-Route Back to Homepage
        return to_route('admin.movies.index');
    }

    public function show(Movie $movie)
    {
        // Definition of Genres
        $genres = Genre::where('id', $movie->texture_id)->firstOrFail();

        // Route to The Show Movie Page
        return view('admin.movies.show')->with('movies', $movies)->with('genres', $genres);
    }

    public function edit(Movie $movie)
    {
        // User Authentication
        $user = Auth::user();
        $user->authorizeRoles('admin');

        // Definition of Movies and Genres
        $movies = Movie::all();
        $genres = Genre::all();

        // Route to Edit Page
        return view('admin.movies.edit')->with('movies', $movies)->with('genres', $genres);
    }

    public function update(Request $request, Movie $movie)
    {
        // Definition of Genres
        $genres = Genre::all();

        // Movie Update Validation
        $request->validate([
            'title' => 'required|max:255',
            'movie_image' => 'required',
            'synopsis' => 'requred|max:255',
            'director' => 'required|max:255',
            'starring' => 'required|max:255',
            'release_date' => 'required',
            'genre_id' => 'required'
        ]);

        // Creating Variable For Movie Image And Extension
        $movie_image = $request->file('movie_image');
        $extension = $movie_image->getClientOriginalExtension();

        // Creating Unique File Name to Database
        $filename = date('Y-m-d-his') . '_' . $request->input('title') . '.' . $extension;

        // Pushing File With New Name to Images Folder
        $path = $movie_image->storeAs('public/images', $filename);

        if($movie->user_id != Auth::id()){
            return abort(403);
        }

        // Update Movie Function (Ran Into Schema Error)
        $movie->title = $request->title;
        $movie->synopsis = $request->synopsis;
        $movie->director = $request->director;
        $movie->starring = $request->starring;
        $movie->release_date = $request->release_date;
        $movie->movie_image = $filename;
        $movie->genre_id = $request->genre_id;
        $movie->save();

        // Re-Route Back to Homepage
        return to_route('admin.movies.index');
    }

    public function destroy(Movie $movie)
    {
        // User Authentication
        $user = Auth::user();
        $user->authorizeRoles('admin');

        // Deletes Movie (Pretty Self Explanitory)
        $movie->delete();

        // Re-Routes Back to Homepage
        return to_route('admin.movies.index');
    }
}
