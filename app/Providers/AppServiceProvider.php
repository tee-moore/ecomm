<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\Product;
use App\Models\User;
use App\Models\Variation;
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
