
<div>
	<style>
		nav svg {
			height: 20px;
		}	
	</style>
	@include('livewire.student_create')
	@include('livewire.student_update')
	<section>
		<div class="container">
			<div class="row">
				<div class="col-10">
					@if(session()->has('message'))
						<div class="alert alert-info">{{session('message')}}</div>
					@endif
				   <div class="card">
				   	<div class="card-header">
				   		<div class="row">
				   			<div class="col-md-8">
				   				<h3>Students 
							   			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
									  + Add
									</button>

							   		</h3>
				   			</div>
				   			<div class="col-md-4">
				   				<input type="text" name="search" class="form-control" wire:model="search">
				   			</div>
				   		</div>
				   	</div>
				  <div class="card-body">
				    <table class="table table-sm">
				    	<thead>
				    		<tr>
				    			<th>First Name</th>
				    			<th>Last Name</th>
				    			<th>Email</th>
				    			<th>Phone</th>
				    			<th>Action</th>
				    		</tr>
				    	</thead>

				    	<tbody>
				    		@foreach($rows as $row)
				    			<tr>
				    				<td>{{$row->firstname}}</td>
				    				<td>{{$row->lastname}}</td>
				    				<td>{{$row->email}}</td>
				    				<td>{{$row->phone}}</td>
				    				<td>
				    					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentUpdate" wire:click.prevent="edit({{$row->id}})">
										  Edit
										</button>

										<button class="btn btn-danger" onclick="confirm('Confirm delete?') || event.stopImmediatePropagation()" wire:click.prevent="delete({{$row->id}})">Delet</button>
										
				    				</td>
				    				
				    			</tr>
				    		@endforeach
				    	</tbody>
				    </table>
				    {{$rows->links()}}
				  </div>
				</div>

				</div>
			</div>
		</div>
	</section>

<!-- delete -->
<!-- Button trigger modal -->


</div>
