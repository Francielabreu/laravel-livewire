<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowTweets extends Component
{
    public $message = 'Apenas um testes'; 

    public function render()
    {
        return view('livewire.show-tweets');
    }
}
