<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();

        return view('admin.articles.index', [ 'articles'=> $articles, 'title'=>'Мои статьи']);
    }
    public  function show($slug)
    {
        $article = Article::where('slug', $slug)->first();

        $author = $article->author;

        return view('admin.articles.show', ['article'=> $article,'author'=>$author, 'title'=>'Читаем статью']);
    }
    public function create()
    {

        return  view('admin.articles.create', ['title'=>'Создаем статью']);

    }
    public function store()
    {
        return "store ppost";
    }
    public function edit($slug)
    {

        $article = Article::where('slug', $slug)->first();

        return view('admin.articles.edit', ['article'=> $article, 'title'=>'Редактируем статью']);
    }
    public function update($slug)
    {

    }
    public function delete($article)
    {
        return 'delete 1 photo';
    }

}
