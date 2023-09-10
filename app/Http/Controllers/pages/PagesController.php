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
        $pagename = 'Contact Us';
        return view('frontend.pages.contact', [
            'pagename' => $pagename,
        ]);
    }
    public function aboutus()
    {
        $pagename = 'About Us';
        return view('frontend.pages.aboutus', [
            'pagename' => $pagename,
        ]);
    }
}
