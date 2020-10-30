<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\User as Users;

use Livewire\WithPagination;


class User extends Component
{

	//public $users;
	
	use WithPagination;

    public function render()
    {	

    	$users = Users::paginate(10);

        return view('livewire.user',['users'=>$users]);
    }
}
