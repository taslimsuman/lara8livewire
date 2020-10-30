<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Action extends Component
{
    
    public $num1 = 0;
    public $num2 = 0;

    public $sum;

    public $msg;

    public function showmsg($msg){
    	$this->msg = $msg;
    }

    public function addme($a,$b){

    	$this->sum = $a+$b;
    }

    public function getsum(){

    	$this->sum = $this->num1 + $this->num2;

    }
    public function render()
    {
        return view('livewire.action');
    }
}
