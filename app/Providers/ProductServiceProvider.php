<?php

namespace App\Providers;

use App\Helpers\Contracts\ProductInterface;
use App\Helpers\ProductHelper;
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
        $this->app->bind(ProductInterface::class, function ($app) {
            return new ProductHelper();
        });
    }
}
