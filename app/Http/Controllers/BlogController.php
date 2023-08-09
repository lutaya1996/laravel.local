<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class BlogController
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

                    ->where('active', true)

                    ->latest('published_at' )

                    ->paginate(6);



        return view('blog.index', ['articles' => $articles, 'title' => 'Наш блог', 'request' => $request]);
    }

    public function show($slug)
    {

        $article = Article::query()

                                ->where('slug', $slug)

                                ->firstOrFail();


        if(is_null($article))  {

            abort(404);

        }

        $author = $article->author;


        return view('blog.show', ['article' => $article,

            'title' => 'Читаем статью', 'author' => $author,

        ]);

    }

}
