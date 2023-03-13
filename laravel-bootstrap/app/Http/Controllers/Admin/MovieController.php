<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        // User Authentication
        $user = Auth::user();
        $user->authorizeRoles('admin');

        // Definintion of Movies
        $Movies = Movie::all();

        // Route to home page
        return view('admin.home.index')->with('movies', $movies);
    }
}
