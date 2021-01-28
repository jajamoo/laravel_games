<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Twilio\Exceptions\RestException;
use Twilio\Exceptions\TwilioException;
use Twilio\Rest\Client;

class SendSMSJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $twilioClient;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        $sid = config('services.twilio.account_sid');
        $token = config('services.twilio.auth_token');
        $this->twilioClient = new Client($sid, $token);
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $template = "Hey %s, The Following Games Info Has been Saved to the DB";
        $body = sprintf($template, "User");
        try {
            $message = $this->twilioClient->messages->create(
                "User",
                [
                    'from' => config('services.twilio.phone_number'),
                    'body' => $body
                ]
            );
        }catch (RestException $e){
            Log::info($e->getMessage());
        }
        Log::info($message->status);
    }
}
