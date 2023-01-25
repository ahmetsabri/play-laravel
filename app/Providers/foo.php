<?php

namespace App\Providers;

use App\Providers\Ok;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class foo
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Providers\Ok  $event
     * @return void
     */
    public function handle(Ok $event)
    {
        //
    }
}
