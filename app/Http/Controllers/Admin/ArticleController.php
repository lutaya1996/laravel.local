<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::paginate(3);
        return view('articles', [ 'articles'=> $articles, 'title'=>'Мои статьи']);
    }
    public  function show($slug)
    {
        $article = Article::where('slug', $slug)->first();
        return view('concrete_article', ['article'=> $article, 'title'=>'Читаем статью']);
    }
    public function create()
    {
        return "aricle create-forma";
    }
    public function store()
    {
        return "store ppost";
    }
    public function edit($article)
    {
        return 'edit 1 photo';
    }
    public function update($article)
    {
        return 'update 1 photo';
    }
    public function delete($article)
    {
        return 'delete 1 photo';
    }

}
