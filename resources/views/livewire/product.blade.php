<div>
    
    Title: <input type="text" wire:model="title"> <br>
    Name: <input type="text" wire:model="name">

    <h3>Title: {{$title}}</h3>
    <h3>Name: {{$name}}</h3>

    <h3>Lifecycle hooks methods</h3>
    @foreach($info as $inf)
    	<h4>{{$inf}}</h4>
    @endforeach
</div>
