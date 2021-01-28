<?php

namespace App\Listeners;

use App\Events\GameSaved;
use App\Jobs\SendSMSJob;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendSMS
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
     * @param  GameSaved  $event
     * @return void
     */
    public function handle(GameSaved $event)
    {
        SendSMSJob::dispatch($event);
    }
}
