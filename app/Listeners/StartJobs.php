<?php

namespace App\Listeners;

use App\Events\FireTheListener;
use App\Jobs\ActivatePosts;
use App\Jobs\DeactivatePosts;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Bus;

class StartJobs
{
    // use Queueable;
    public function __construct()
    {
        // $this->onQueue('default');
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\FireTheListener  $event
     * @return void
     */
    public function handle(FireTheListener $event)
    {
        Bus::chain([
            new ActivatePosts,
            new DeactivatePosts
        ])->dispatch();
    }
}
