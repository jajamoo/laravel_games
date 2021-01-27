<?php

namespace App\Listeners;

use App\Events\GameSaved;
use App\Jobs\SendEmailJob;
use App\Mail\SendGameSaveEmailer;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendGameSaveEmail implements ShouldQueue
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
