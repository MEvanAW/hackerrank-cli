<?php

namespace App\Providers;

use App\Services;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Register any application services.
     */
    public function register(): void
    {
        app()->bind('Info', function(){
            $fptr = fopen("OUTPUT.txt", "w");
            fwrite($fptr, "register's fwrite");
            fclose($fptr);
        });
    }
}
