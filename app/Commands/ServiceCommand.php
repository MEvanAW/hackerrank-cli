<?php

namespace App\Commands;

use App\Services\IInfoService;
use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;

class ServiceCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laravel:service {text=info} {--make}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Practicing Laravel service providers https://laravel.com/docs/11.x/providers';

    /**
     * Execute the console command.
     */
    public function handle(IInfoService $infoService)
    {
        if ($this->option('make'))
        {
            app()->make('Info');
        }
        else
        {
            $infoService->fwrite($this->argument('text'));
        }
    }

    /**
     * Define the command's schedule.
     */
    public function schedule(Schedule $schedule): void
    {
        // $schedule->command(static::class)->everyMinute();
    }
}
