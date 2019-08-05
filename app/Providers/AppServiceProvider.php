<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Relations\Relation;
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
        // for polymorph relation Media tables
        Relation::morphMap([
            'product'   => 'App\Models\Product',
            'variation' => 'App\Models\Variation',
            'brand'     => 'App\Models\Brand',
            'user'      => 'App\Models\User',
        ]);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
