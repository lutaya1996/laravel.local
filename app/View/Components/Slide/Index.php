<?php

namespace App\View\Components\Slide;

use App\Models\Slide;
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
        $slides = Slide::all();

        return view('components.slide.index', ['slides'=> $slides, ]);
    }
}
