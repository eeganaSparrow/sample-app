<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class HellloServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        View::composer('hello.index', '\App\Http\Composers\HelloComposer');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
