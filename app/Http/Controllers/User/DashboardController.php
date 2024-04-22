<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index()
    {
        $featuredMovies = Movie::whereIsFeatured(true)->get();
        $movie = Movie::all();
        return inertia('User/Dashboard/Index', [
            "featuredMovies" => $featuredMovies,
            "movies" => $movie
        ]);
    }
}
