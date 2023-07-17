<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function showAll()
    {
        $articles = Article::paginate(3);
        return view('articles', [ 'articles'=> $articles, 'title'=>'Мои статьи']);
    }
    public  function showOne($slug)
    {
        $article = Article::where('slug', $slug)->first();
        return view('concrete_article', ['article'=> $article, 'title'=>'Читаем статью']);
    }
}
