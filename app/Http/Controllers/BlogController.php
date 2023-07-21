<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class BlogController
{
    public function index(Request $request)
    {
        $articles = Article::class;
        $primaryArticle = Article::where('slug', 'primary')->first();

        return view('blog.index', [ 'articles'=> $articles, 'title'=>'Наш блог', 'primaryArticle'=>$primaryArticle, 'request'=>$request]);
    }
    public function show(Request $request, $slug)
    {
        $article = Article::where('slug', $slug)->first();

        return view('blog.show', ['article'=> $article, 'title'=>'Читаем статью', 'request'=>$request]);

    }

}
