<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;

class ConfigCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laravel:config';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Practicing Laravel config https://laravel.com/docs/11.x/configuration';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info(config('hackerrank.key'));
    }

    /**
     * Define the command's schedule.
     */
    public function schedule(Schedule $schedule): void
    {
        // $schedule->command(static::class)->everyMinute();
    }
}
