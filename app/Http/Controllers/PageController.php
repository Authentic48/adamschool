<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
 
    public function index()
    {
        return view('pages.welcome');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function courses()
    {
        return view('pages.course');
    }


    public function team()
    {
        return view('pages.team');
    }

    public function partnership()
    {
        return view('pages.partnership');
    }

    public function reviews()
    {
        return view('pages.review');
    }
}
