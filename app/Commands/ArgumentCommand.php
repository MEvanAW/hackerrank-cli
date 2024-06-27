<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;

class ArgumentCommand extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'laravel:argument {required} {default=arg1} {optional?} {--switch} {--option=}';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Practicing Artisan defining input expectation https://laravel.com/docs/11.x/artisan#defining-input-expectations';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->info('{required} is ' . $this->argument('required'));
        $this->info('{default} is ' . $this->argument('default'));
        $this->info('{optional} is ' . $this->argument('optional'));
        if($this->option('switch'))
        {
            $this->info('switch is provided');
        }
        else
        {
            $this->info('switch is not provided');
        }
        $this->info('{--option} is ' . $this->option('option'));
    }

    /**
     * Define the command's schedule.
     */
    public function schedule(Schedule $schedule): void
    {
        // $schedule->command(static::class)->everyMinute();
    }
}
