<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){
        if(request()->has('query')){
            $articles = Article::latest()->where('name', 'LIKE', '%'.request()->input('query').'%')->paginate(10);
            request()->flash();
        }else{
            $articles = Article::latest()->paginate(10);
        }
        return view('multiauth::admin.articles.index')->with('articles', $articles);
    }

    public function edit(Article $article){
        return view('multiauth::admin.articles.edit')->with('article', $article);
    }

    public function create(Request $request){
        return view('multiauth::admin.articles.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'string|required',
            'description' => 'string|required',
            'content' => 'string|required',
            'thumbnail' => 'image|required'
        ]);
        $data['thumbnail'] = $data['thumbnail']->store('public/articles/thumbnails');
        $article = Article::create($data);
        return redirect()->route('admin.article.index')->with('created', true);
    }

    public function update(Article $article, Request $request){
        $data = $request->validate([
            'name' => 'string|required',
            'description' => 'string|required',
            'content' => 'string|required',
            'thumbnail' => 'image|sometimes|nullable',
        ]);
        if($request->exists('thumbnail')){
            $data['thumbnail'] = $data['thumbnail']->store('public/articles/thumbnails');
        }else{
            unset($data['thumbnail']);
        }
        $article->update($data);
        return back()->with('updated', true);
    }

    public function delete(article $article){
        $article->delete();
        return redirect()->route('admin.article.index')->with('deleted', true);
    }
}
