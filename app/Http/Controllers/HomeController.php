<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('home',[
            'lastPost' => Post::latest()->first(),
            'featuredPosts' => Post::take(3)->get(),
        ]);
    }
}
