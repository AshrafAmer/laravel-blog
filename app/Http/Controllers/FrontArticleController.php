<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontArticleController extends Controller
{
    public function index(Request $request)
    {
        $data['category_id'] = $request->query('category_id');
        $data['categories'] = Category::where('active', 1)->get();
        $data['articles'] = Article::where(function($query){
            $query->where('active', 1);
            if(isset($_GET['category_id'])){
                $query->where('category_id', $_GET['category_id']);
            }
        })->orderBy('created_at', 'desc')->paginate(10);

        return view('pages.home')->with($data);
    }


    public function show(Article $article)
    {
        $article->seen += 1;
        $article->save();
        return view('pages.single_article', ['article' => $article]);
    }
}
