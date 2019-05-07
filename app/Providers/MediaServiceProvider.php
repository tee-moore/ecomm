<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\Product;
use App\Models\User;
use App\Models\Variation;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;

class MediaServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Relation::morphMap([
            0 => Product::class,
            1 => Variation::class,
            2 => Brand::class,
            3 => User::class,
        ]);
    }
}
