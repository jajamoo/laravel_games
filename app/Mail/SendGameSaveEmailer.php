<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendGameSaveEmailer extends Mailable
{
    use Queueable, SerializesModels;

    public $game;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($game)
    {
        $this->game = $game;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $game = $this->game;
        return $this->view('emails.new_game', compact('game'));
    }
}
