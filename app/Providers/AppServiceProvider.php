<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Image;
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
        // Illuminate\Database\Eloquent\Relations\Relation::morphMap([
        //     'product' => App\Product::class,
        //     'user' => App\User::class,
        // ]);

        // Relation::morphMap([
        //     'products' => App\Product::class,
        //     'users' => App\User::class,
        // ]);
        $image = Image::all();
        View::share(compact('image'));
    }
    
}
