<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;

class SaveThePrisonerCommand extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'hackerrank:save-the-prisoner';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Save the prisoner challenge https://www.hackerrank.com/challenges/save-the-prisoner/problem';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $fptr = fopen("OUTPUT.txt", "w");
    
        $t = intval(trim(fgets(STDIN)));
        
        for ($t_itr = 0; $t_itr < $t; $t_itr++) {
            $first_multiple_input = explode(' ', rtrim(fgets(STDIN)));
        
            $n = intval($first_multiple_input[0]);
        
            $m = intval($first_multiple_input[1]);
        
            $s = intval($first_multiple_input[2]);
        
            $result = $this->saveThePrisoner($n, $m, $s);
        
            fwrite($fptr, $result . "\n");
        }
        
        fclose($fptr);
    }

    /**
     * Define the command's schedule.
     */
    public function schedule(Schedule $schedule): void
    {
        // $schedule->command(static::class)->everyMinute();
    }

    /*
    * Complete the 'saveThePrisoner' function below.
    *
    * The function is expected to return an INTEGER.
    * The function accepts following parameters:
    *  1. INTEGER n
    *  2. INTEGER m
    *  3. INTEGER s
    */
    private function saveThePrisoner($n, $m, $s) {
        // Write your code here
        $remainder = $m % $n;
        $prisoner = $s + $remainder - 1;
        if ($prisoner ==  0)
        {
            return $n;
        }
        if ($prisoner > $n)
        {
            return $prisoner - $n;
        }
        return $prisoner;
    }
}
