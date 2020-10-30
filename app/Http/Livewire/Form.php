<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Form extends Component
{
    
    public $name;

    public $msg;
    public $status;
    public $color = [];
    public $opt;

    public function render()
    {
        return view('livewire.form');
    }
}
