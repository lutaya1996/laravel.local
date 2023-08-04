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
    public function store(Request $request)
    {
        $image = $request->input('image');

        $title = $request->input('title');

        $slug = $request->input('slug');

        $content = $request->input('content');

        $category = $request->input('category');

        $author = $request->input('author');

        $published_date = $request->input('published_date');

        return redirect()->route('admin.articles.show', ['slug' => $slug]);

    }
    public function edit($slug)
    {

        $article = Article::where('slug', $slug)->first();

        return view('admin.articles.edit', ['article'=> $article, 'title'=>'Редактируем статью']);
    }
    public function update(Request $request, $slug)
    {
        $image = $request->input('image');

        $title = $request->input('title');

        $slug = $request->input('slug');

        $content = $request->input('content');

        $category = $request->input('category');

        $author = $request->input('author');

        $published_date = $request->input('published_date');

        return redirect()->route('admin.articles.show', ['slug' => $slug]);

    }
    public function delete($article)
    {
        return  redirect()->route('admin.articles');
    }

}
