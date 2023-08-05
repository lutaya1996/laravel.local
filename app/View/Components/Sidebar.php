<?php

namespace App\View\Components;

use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Sidebar extends Component
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
        $tags = Tag::all();

        $categories = Category::all();

        $articles = Article::all();

        return view('components.right-sidebar', ['tags'=>$tags, 'categories'=> $categories, 'articles'=>$articles]);
    }
}
