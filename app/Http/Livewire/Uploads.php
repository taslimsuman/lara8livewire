<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Upload;
use Livewire\WithFileUploads;

class Uploads extends Component
{
    
	public $title;
	public $filename;

	use WithFileUploads;


	public function fileupload(){

		$val = $this->validate([
			'title' => 'required',
			'filename' => 'required'
		]);

		$file = $this->filename->store('files','public');

		$val['filename'] = $file;

		$data = new Upload;

		$data->title = $val['title'];
		$data->filename = $val['filename'];

		if($data->save()){
			
			session()->flash('message','File uploads');
			$this->emit('fileupload');
		}

	
	}

    public function render()
    {
        return view('livewire.uploads');
    }
}
