<?php

namespace App\Listeners;

use App\Events\GameSaved;
use App\Jobs\SendEmailJob;

class SendGameSaveEmail
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
        SendEmailJob::dispatch($event);
    }
}
