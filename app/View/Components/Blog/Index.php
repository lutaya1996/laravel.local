<?php

namespace App\View\Components\Blog;

use App\Models\Article;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Index extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $articles = Article::orderBy('id', 'desc')->limit(3)->get();

        return view('components.blog.index',['articles' => $articles, ]);
    }
}