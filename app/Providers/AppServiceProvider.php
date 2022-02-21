<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();


        view()->composer(['layouts.sidebar', 'layouts.sidebar2', 'layouts.footer'], function ($view) {

            if (Cache::has('cats')) {
                $cats = Cache::get('cats');
            } else {
                $cats = Category::withCount('posts')->orderBy('posts_count', 'desc')->get();
                Cache::put('cats', $cats, 86400);
            }

            $view->with('popular_posts', Post::orderBy('views', 'desc')->limit(5)->get());
            $view->with('cats', $cats);

            $view->with('allTags', Tag::get()->all());
        });
    }
}
