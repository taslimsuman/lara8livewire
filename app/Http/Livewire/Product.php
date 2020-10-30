<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Product extends Component
{
    
	public $title;
	public $name;
	public $info = [];


	public function mount(){
		$this->info[] = 'application is mounting..';
	}

	public function hydrate(){
		$this->info[] = 'application is hydrating..';
	}


	public function updating($name,$value){
		$this->info[] = 'application is updating..';
	}

	public function updated($name,$value){
		$this->info[] = 'application is updated..';
	}

	public function updatingName(){
		$this->info[] = 'updating Name..';
	}

	public function updatedName(){
		$this->info[] = 'updated Name..';
	}


    public function render()
    {
        return view('livewire.product');
    }
}
