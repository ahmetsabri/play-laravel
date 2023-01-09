<?php
namespace App\Helpers;

use Illuminate\Console\Scheduling\ManagesFrequencies;

trait CustomFrequency {
    use ManagesFrequencies;
    public function everyTwentyMinutes()
    {
        return $this->cron("*/20 * * * *");
    }
}
