<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Carbon\Carbon;
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
        $article = Article::query()

                                ->where('slug', $slug)

                                ->firstOrFail();

        $author = $article->author;

        return view('admin.articles.show', ['article'=> $article,'author'=>$author, 'title'=>'Читаем статью']);
    }
    public function create()
    {

        return  view('admin.articles.create', ['title'=>'Создаем статью']);

    }
    public function store(Request $request)
    {

        $validated = validate($request->all(), [

            'image' => ['nullable', 'string'],

            'active'=> ['nullable', 'boolean'],

            'slug'=> ['required', 'string', 'max:15'],

            'title'=> ['required', 'string', 'max:30'],

            'content'=> ['required', 'string'],

            'author_id'=> ['nullable', 'integer', 'exists:authors'],

            'category_id' => ['nullable', 'integer', 'exists:category,id'],

            'tag_id' => ['nullable', 'integer', 'exists:tags,id'],

            'published_at'=> ['nullable','string', 'date'],

        ]);

        $article = Article::query()->create([

            'slug' => $validated['slug'],

            'active' => $validated['active'] ?? false,

            'title' => $validated['title'],

            'content' => $validated['content'],

            'author_id' => $validated['author_id'] ?? null,

            'category_id' => $validated['category_id'] ?? null,

            'tag_id' => $validated['tag_id'] ?? null,

            'published_at' => new Carbon($validated['published_at'] ?? null),

        ]);

        $article->save();

        $slug = $validated['slug'];

        return redirect()->route('admin.articles.show', ['slug' => $slug]);

    }
    public function edit($slug)
    {

        $article = Article::query()

                                ->where('slug', $slug)

                                ->firstOrFail();

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
