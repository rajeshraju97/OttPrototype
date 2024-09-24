<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index()
    {
        return view('welcome');
    }
    public function singleMovie()
    {
        return view('single_movie');
    }
    public function singletvseries()
    {
        return view('single_tvseries');
    }
    public function singleAnime()
    {
        return view('single_anime');
    }

}
