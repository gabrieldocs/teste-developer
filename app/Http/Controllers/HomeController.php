<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\IMDBMovies;
use App\Models\IMDBGenders;

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
    public function index()
    {
        // $genders = IMDBGenders::find(2);
        $movies = IMDBMovies::all();
        $genders = IMDBGenders::all();
        // $genders = $movie->gender;
        // $movies = $genders->movie;
        return view('home',
        [
        //    'genders' => $genders,
           'movies' => $movies,
           'genders' => $genders
        ]);
    }
}
