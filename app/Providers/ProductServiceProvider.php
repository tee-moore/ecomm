<?php

namespace App\Providers;

use App\Helpers\AbstractClass\ProductAbstract;
use App\Helpers\Product;
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
            return new Product();
        });
    }
}
