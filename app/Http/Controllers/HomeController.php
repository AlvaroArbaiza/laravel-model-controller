<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        
        $title = 'Pagina Home';

        return view('pages.home', compact('title'));
    }
}
