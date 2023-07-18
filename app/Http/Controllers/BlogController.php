<?php

namespace App\Http\Controllers;
use App\Models\Article;

class BlogController
{
    public function index()
    {
        $articles = Article::class;
        $primaryArticle = Article::where('slug', 'primary')->first();

        return view('blog.index', [ 'articles'=> $articles, 'title'=>'Наш блог', 'primaryArticle'=>$primaryArticle]);
    }
    public function show($slug)
    {
        $article = Article::where('slug', $slug)->first();

        return view('blog.show', ['article'=> $article, 'title'=>'Читаем статью']);

    }

}
