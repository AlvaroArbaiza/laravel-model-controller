<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Movie;

class HomeController extends Controller
{
    public function index() {
        
        $title = 'Pagina Home';

        $movies = Movie::All();

        return view('pages.home', compact('title', 'movies'));
    }
}
