<?php

namespace App\Providers;

use App\Helpers\Contracts\SpecificationInterface;
use App\Helpers\SpecificationHelper;
use Illuminate\Support\ServiceProvider;

class SpecificationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(SpecificationInterface::class, function ($app) {
            return new SpecificationHelper();
        });
    }
}
