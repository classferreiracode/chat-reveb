<?php

namespace App\Jobs;

use App\Events\GotMessage;
use App\Models\Message;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendMessages implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    public function __construct(public Message $message)
    {

    }


    public function handle(): void
    {
        GotMessage::dispatch([
            'sender' => $this->message->sender,
            'receiver' => $this->message->receiver,
            'message' => $this->message,
            'read' => false,
            'time' => now(),
        ]);
    }
}
