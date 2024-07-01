<?php

namespace App\Services;

use Illuminate\Contracts\Foundation\Application;

class InfoService implements IInfoService
{
    public function fwrite(string $text): void
    {
        $fptr = fopen("OUTPUT.txt", "w");
        fwrite($fptr, $text);
        fclose($fptr);
    }
}