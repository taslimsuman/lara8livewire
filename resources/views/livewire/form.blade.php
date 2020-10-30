<div>
   Name: <input type="text" wire:model.debounce.1000ms="name"> <br>
   Message: <textarea wire:model="msg"></textarea> <br>

   Status: <input type="radio" name="" value="Single" wire:model="status">
    <input type="radio" name="" value="Married"  wire:model="status"> <br>

    Color: 
    Red: <input type="checkbox" value="Red" wire:model="color">
    Green: <input type="checkbox" value="Green" wire:model="color">
    Blue: <input type="checkbox" value="Blue" wire:model="color"><br>


    Option: 
    <select name="" id="" wire:model="opt">
    	<option value="Package1">Package1</option>
    	<option value="Package2">Package2</option>
    	<option value="Package3">Package3</option>
    </select>


   <hr>
   <p>Name: {{$name}}</p>

   <p>Message: {{$msg}}</p>
   <p>Status: {{$status}}</p>
   <p>Color:</p>
   <ul>
   @foreach($color as $col)
  
   		<li>{{$col}}</li>
   	
   @endforeach
   </ul>
   <p>Opt: {{$opt}}</p>
</div>
