<?php

namespace App\Livewire;

use Livewire\Component;

class ActionUserBtn extends Component
{

    public $url;
    public $text;
    public $color;

    public function mount($url, $text, $color)
    {
        $this->url = $url;
        $this->text = $text;
        $this->color = $color;
    }

    public function render()
    {
        return view('livewire.action-user-btn');
    }
}
