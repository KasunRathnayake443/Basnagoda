<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        return view('frontend.home');
    }

    public function history()
    {
        return view('frontend.history');
    }

    public function rooms()
    {
        return view('frontend.rooms');
    }

    public function gallery()
    {
        return view('frontend.gallery');
    }

    public function experiences()
    {
        return view('frontend.experiences');
    }

    public function contact()
    {
        return view('frontend.contact');
    }
}