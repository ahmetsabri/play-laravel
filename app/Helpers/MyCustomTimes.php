<?php

namespace App\Helpers;

use Illuminate\Console\Scheduling\Schedule;

class MyCustomTimes extends Schedule {

    public function newCommand(string $command, array $parameters): MyCustomEvent
    {
        return parent::command($command, $parameters);
    }
}
