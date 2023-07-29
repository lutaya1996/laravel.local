<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class BlogController
{
    public function index(Request $request)
    {
        $articles = Article::all()->sortDesc();

        return view('blog.index', [ 'articles'=> $articles, 'title'=>'Наш блог', 'request'=>$request]);
    }
    public function show(Request $request, $slug)
    {
        $article = Article::where('slug', $slug)->first();
        $author = $article->author;


        return view('blog.show', ['article'=> $article, 'title'=>'Читаем статью', 'author'=>$author, 'request'=>$request,
        ]);

    }

}
