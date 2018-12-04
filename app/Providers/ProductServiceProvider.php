<?php

namespace App\Providers;

use App\Helpers\AbstractClass\ProductAbstract;
use App\Helpers\ProductSimple;
use App\Helpers\ProductVariant;
use App\Http\Controllers\HomeController;
use Illuminate\Support\ServiceProvider;

class ProductServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ProductAbstract::class, function ($app) {
            return new ProductVariant();
        });

//        $this->app->when(HomeController::class)
//                  ->needs(ProductAbstract::class)
//                  ->give(function () {
//                      return new ProductSimple();
//                  });

//        $this->app->when([HomeController::class])
//                  ->needs(ProductAbstract::class)
//                  ->give(function () {
//                      return new ProductVariant();
//                  });
    }
}
