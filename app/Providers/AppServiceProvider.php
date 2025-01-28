<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Support\Facades\View;
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
        $categories = ['Games', 'Business', 'Sports', 'Fashion', 'Life & Style', 'Technology', 'Photography', 'Politics'];
        View::share('categories', $categories);

        $news = News::latest()->take(8)->get();
        View::share('news', $news);
    }
}
