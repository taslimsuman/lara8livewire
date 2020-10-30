<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;

use Livewire\WithPagination;

class Students extends Component
{
	use WithPagination;

	public $firstname;
	public $lastname;
	public $email;
	public $phone;

	public $stid;

	public $search;


	public function freset(){
		$this->firstname = '';
		$this->lastname = '';
		$this->email = '';
		$this->phone = '';

	}

	public function store(){

		$data = $this->validate([
			'firstname' => 'required',
			'lastname' => 'required',
			'email' => 'required|email',
			'phone' => 'required',
		]);

		$data = new Student;
		$data->firstname = $this->firstname;
		$data->lastname = $this->lastname;
		$data->email = $this->email;
		$data->phone = $this->phone;

		if($data->save()){
			session()->flash('message','Studend saved');
			$this->freset();
			$this->emit('studentsave');
		}
	}

	public function edit($id){

		$row = Student::find($id);
		
		$this->stid = $row->id;

		$this->firstname = $row->firstname;
		$this->lastname = $row->lastname;
		$this->email = $row->email;
		$this->phone = $row->phone;

	}

	public function update(){

		$this->validate([
			'firstname' => 'required',
			'lastname' => 'required',
			'email' => 'required|email',
			'phone' => 'required',
		]);


		$row = Student::find($this->stid);


		$row->firstname = $this->firstname ;
		$row->lastname = $this->lastname ;
		$row->email = $this->email;
		$row->phone = $this->phone;

		if($row->save()){
			session()->flash('message','Updated');
			$this->emit('updated');
		}

	}

	

	public function delete($id){

		$row = Student::find($id);

		if($row->delete()){

			session()->flash('message','Deleted');
			
		}
	}

	
    public function render()
    {
        $search = '%'.$this->search.'%';

        $rows = Student::where('firstname','LIKE',$search)
        				->orWhere('lastname','LIKE',$search)
        				->orWhere('email','LIKE',$search)
        				->orWhere('phone','LIKE',$search)
        				->paginate(20);

        return view('livewire.student',compact('rows'));
    }
}
