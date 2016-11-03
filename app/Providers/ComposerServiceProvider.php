<?php

namespace App\Providers;

Use View;
Use App\Product;
use App\Categories;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
     public function boot()
    {
         View::composer('*', function($view)
        {
        $view->with('categories', Categories::where('parent_id',NULL)->orderBy('id')->get());
        });
         View::composer(array('pages.home'), function($view)
        {
        $view->with('product', Product::where('is_top','1')->orderBy('id')->get());
        });

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
