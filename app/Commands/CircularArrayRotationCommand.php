<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;

class CircularArrayRotationCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hackerrank:circular-array-rotation';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Circular Array Rotation challenge https://www.hackerrank.com/challenges/circular-array-rotation/problem';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $fptr = fopen("OUTPUT.txt", "w");

        $first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

        $n = intval($first_multiple_input[0]);

        $k = intval($first_multiple_input[1]);

        $q = intval($first_multiple_input[2]);

        $a_temp = rtrim(fgets(STDIN));

        $a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

        $queries = array();

        for ($i = 0; $i < $q; $i++) {
            $queries_item = intval(trim(fgets(STDIN)));
            $queries[] = $queries_item;
        }

        $result = $this->circularArrayRotation($a, $k, $queries);

        fwrite($fptr, implode("\n", $result) . "\n");

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
    * Complete the 'circularArrayRotation' function below.
    *
    * The function is expected to return an INTEGER_ARRAY.
    * The function accepts following parameters:
    *  1. INTEGER_ARRAY a
    *  2. INTEGER k
    *  3. INTEGER_ARRAY queries
    */

    function circularArrayRotation($a, $k, $queries) {
        $answers = array();
        $count = count($a);
        $k = $k % $count;
        foreach ($queries as $query)
        {
            $index = $query - $k;
            if ($index < 0)
            {
                $index += $count;
            }
            array_push($answers, $a[$index]);
        }
        return $answers;
    }
}