<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Image;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $validated = $request->validate([

            'search'=> [ 'nullable', 'string', 'max:50'],

            'category' => ['nullable', 'string', 'max:50'],

            'from_date' => ['nullable', 'string', 'max:20', 'date'],

            'to_date' => ['nullable', 'string', 'max:20', 'date', 'after:from_date'],

        ]);

        $query = Article::query();

        if ($search = $validated['search'] ?? null) {

            $query ->where('content', 'like', "%{$search}%")

                ->paginate(6);

        }


        if ($category = $validated['category'] ?? null) {

            $query ->join('categories', 'category_id', '=', 'categories.id')

                ->select('articles.*', 'title', 'content', 'slug','published_at')

                ->where('categories.name', 'like', "%{$category}%")

                ->paginate(6);
        }

        if ($from_date = $validated['from_date'] ?? null) {

            $query->where('published_at', '>=', new Carbon($from_date))

                ->paginate(6);
        }

        if ($to_date = $validated['to_date'] ?? null) {

            $query->where('published_at', '<=', new Carbon($to_date))

                ->paginate(6);
        }

        $articles = $query

            ->latest('published_at' )

            ->paginate(6);


        return view('admin.articles.index', [ 'articles'=> $articles, 'title'=>'Мои статьи']);
    }
    public  function show($slug)
    {

        $article = cache()->remember(

            key: "articles.{$slug}",

            ttl: now()->addHour(),

            callback: function () use ($slug)  {

                        return  Article::query()

                            ->where('slug', $slug)

                            ->firstOrFail();
                        }

            );

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

//        $article->save();

        $slug = $article->slug;

        $image = Image::query()->create([

            'path' => "{$validated['image']}",

            'imageable_type' => 'article',

            'imageable_id' => "{$article->id}",

            'alt' => 'img',

        ]);

        $image->save();

        dd($image);

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

        return redirect()->route('admin.articles.show', ['slug' => $slug]);

    }
    public function delete(Request $request, $slug)
    {
        Article::where('slug', $slug)->delete();

        return  redirect()->route('admin.articles');
    }

}
