<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home()
    {
        return view('frontend.pages.home');
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }
    public function aboutus()
    {
        return view('frontend.pages.aboutus');
    }
}
