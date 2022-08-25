<?php

namespace App\Listeners;

use App\Events\MakeLawyerOffline;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class LawyerOffline
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
     * @param  \App\Events\MakeLawyerOffline  $event
     * @return void
     */
    public function handle(MakeLawyerOffline $event)
    {
        // print_r($event->user);exit;
    }
}
