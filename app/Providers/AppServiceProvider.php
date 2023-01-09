<?php

namespace App\Providers;

use App\Helpers\MyCustomEvent;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Rules\Password;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Check Length
     * Must contains capital letters
     * Must contains symbols letters
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
