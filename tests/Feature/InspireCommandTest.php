<?php

namespace Tests\Feature;

use Tests\TestCase;
use PHPUnit\Framework\Attributes\Test;

class InspireCommandTest extends TestCase
{
    /**
     * @return void
     */
    #[Test]
    public function will_exit_0(): void
    {
        $this->artisan('inspire')->assertExitCode(0);
    }
}
