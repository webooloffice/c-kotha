<?php

namespace App\Http\Controllers\User;

use App\Models\Blog;
use App\Models\Themes;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $category = Category::where('status', 'active')->get();

        //getting most view alltime blog
        $best = Blog::orderBy('view_count', 'desc')->take(4)->get();

        //Recent
        $recent = Blog::orderBy('id', 'desc')->take(4)->get();

        return view('Themes.theme1.index', [
            'recent'    => $recent,
            'bests'     => $best,
            'cats'      => $category,
        ]);
        // }
    }
}