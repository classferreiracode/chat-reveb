<?php

namespace App\Livewire;

use Livewire\Component;

class ChatComponent extends Component
{
    public $messages = [];
    public $receiver;

    public function render()
    {
        return view('livewire.chat-component');
    }


}
