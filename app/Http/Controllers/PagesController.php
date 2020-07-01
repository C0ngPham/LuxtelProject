<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('Luxtel.index');
    }
    public function premiere()
    {
        return view('Luxtel.premiere');
    }
    public function suite()
    {
        return view('Luxtel.suite');
    }
    public function guest()
    {
        return view('Luxtel.guest');
    }
    public function about()
    {
        return view('Luxtel.about');
    }
    public function rooms()
    {
        return view('Luxtel.rooms');
    }
}
