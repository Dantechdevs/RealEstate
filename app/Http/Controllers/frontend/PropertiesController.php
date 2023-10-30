<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PropertiesController extends Controller
{
    //
    public function index()
    {
        $pagename = "Properties";
        return view('frontend.properties.index', [
            'pagename' => $pagename,
        ]);
    }
}
