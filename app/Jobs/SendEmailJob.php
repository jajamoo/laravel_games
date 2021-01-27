<?php

namespace App\Jobs;

use App\Events\GameSaved;
use App\Mail\SendGameSaveEmailer;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $event;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(GameSaved $event)
    {
        $this->event = $event;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->event->game->publisher_email)->send(
            new SendGameSaveEmailer($this->event->game)
        );
    }
}
