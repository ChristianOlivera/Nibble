<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function menu()
    {
        return view('menu');
    }

    public function about()
    {
        return view('about');
    }
}
