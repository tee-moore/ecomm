<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // for poly morph relation Media tables
        Relation::morphMap([
            'product' => 'App\Models\Product',
            'variation' => 'App\Models\Variation',
            'brand' => 'App\Models\Brand',
            'user' => 'App\Models\User',
        ]);
    }
}
