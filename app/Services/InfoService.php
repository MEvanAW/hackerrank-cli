<?php

namespace App\Services;

use Illuminate\Contracts\Foundation\Application;

class InfoService implements IInfoService
{
    private Application $app;

    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    public function info(string $text): void
    {
        $this->app->info($text);
    }
}