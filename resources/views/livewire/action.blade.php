<div>
    <button type="button" wire:click="addme(17,5)">Go</button> <br>

    <textarea name="" id="" cols="30" rows="10" wire:keydown.enter="showmsg($event.target.value)"></textarea> <br>

    <p>{{$sum}}</p>

    <p>Message: {{$msg}}</p>

    <hr>
    <form wire:submit.prevent="getsum">
    	<input type="number" wire:model="num1">
    	<input type="number" wire:model="num2">

    	<input type="submit" value="Submit">
    </form>
</div>
