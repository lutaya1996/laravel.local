<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class BlogController
{
    public function index(Request $request)
    {
        $category = $request->input('category');

        $search = $request->input('search');


        if ($search) {

            $articles = Article::cursor()->filter(function ($article) use ($search) {

                return str_contains($article->content, $search);

            });

        } elseif ($category) {

            $articles = Article::cursor()->filter(function ($article) use ($category) {

                return $article->category->name == $category;

            });

        } else {
            $articles = Article::all()->sortDesc();
        }


        return view('blog.index', ['articles' => $articles, 'title' => 'Наш блог', 'request' => $request]);
    }

    public function show($slug)
    {
        $article = Article::where('slug', $slug)->first();
        $author = $article->author;


        return view('blog.show', ['article' => $article, 'title' => 'Читаем статью', 'author' => $author,
        ]);

    }

}
