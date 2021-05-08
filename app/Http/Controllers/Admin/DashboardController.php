<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;


class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        $data['articles'] = Article::where('active', 1)->count();
        $data['visitors'] = Article::where('active', 1)->sum('seen');
        $data['top_articles'] = Article::where('active', 1)->orderBy('seen', 'desc')->take(3)->get();
        $data['categories'] = Category::where('active', 1)->count();
        return view('admin.dashboard', $data);
    }
}
