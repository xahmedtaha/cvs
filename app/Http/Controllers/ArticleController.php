<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $request){
        if($request->has('query')){
            $articles = Article::latest()->where('name', 'LIKE', "%{$request->input('query')}%")->paginate(10);
            $request->flash();
        }else{
            $articles = Article::latest()->paginate(10);
        }
        return view('articles.index')->with('articles', $articles);
    }

    public function show(Article $article){
        return view('articles.show')->with('article', $article);
    }
}
