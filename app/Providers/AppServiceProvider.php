<?php

namespace App\Providers;

use App\Services\IInfoService;
use App\Services\InfoService;
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
        $this->app->singleton(IInfoService::class, function ()
        {
            return new InfoService();
        });
    }
}
