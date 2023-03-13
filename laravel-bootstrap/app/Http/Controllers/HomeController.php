<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $user = Auth::user();
        $home = 'home';
        
        if($user->hasRole('admin')){
            $home = 'admin.home.index';
        }
        else if($user->hasRole('user')){
            $home = 'user.home.index';
        }
        return redirect()->route($home);
    }
}
