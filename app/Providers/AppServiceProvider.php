<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Relation::enforceMorphMap([
            'article' => 'App\Models\Article',
            'user' => 'App\Models\User',
            'author' => 'App\Models\Author',
            'slide' => 'App\Models\Slide',
            'team' => 'App\Models\Team',
            'testimonial' => 'App\Models\Testimonial',
        ]);

        Paginator::useBootstrapFive();
    }
}
