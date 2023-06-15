<?php

namespace XianCat\LaravelBase;

use Illuminate\Support\ServiceProvider;
use XianCat\LaravelBase\Exception\ExceptionFactory;

class LaravelBaseProvider extends ServiceProvider
{
    public function boot()
    {
    }

    public function register()
    {
        $this->app->singleton("ExceptionFactory", function ($app) {
            return new ExceptionFactory();
        });
    }
}
