<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;

class ProcessSMS implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $message1;
    public $user_phone_number;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($message1, $user_phone_number)
    {
        //
        $this->message1 = $message1;
        $this->user_phone_number = $user_phone_number;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        Http::get('https://sms.arkesel.com/sms/api'.'?'.'action=send-sms'. '&api_key=S0l6dWdldGR2clVEYlFRYWRJa2U' .'&to='.$this->user_phone_number.'&from=CodeGod'. '&sms='. $this->message1);
    }
}
