<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function about()
    {

        return view('Themes.theme1.pages.about');
    }

    public function contact()
    {

        return view('Themes.theme1.pages.contact');
    }

    public function privacy()
    {

        return view('Themes.theme1.pages.privacy');
    }
}
