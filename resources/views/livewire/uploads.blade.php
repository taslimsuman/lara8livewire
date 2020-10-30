<div>
   <section>
   	<div class="container">
   		<div class="row">
   			@if(session()->has('message'))
						<div class="alert alert-info">{{session('message')}}</div>
			@endif
   			<div class="col-md-6">
   				<div class="card">
   					<div class="card-header">
   						<h3>Upload</h3>
   					</div>

   					<div class="card-body">
   						<p>Uploads:</p>
   						<form wire.submit.prevent="fileupload" enctype="multipart/form-data" id="file-upload">
   							<div class="form-group">
   								<input type="text" class="form-control" name="title" wire:model="title">
   								@error('title')
   								 <p class="text-danger">{{$message}}</p>
   								@enderror
   							</div>
   							<div class="form-group">
   								<input type="file" class="form-control"  wire:model="filename">
   								@error('filename')
   								 <p class="text-danger">{{$message}}</p>
   								@enderror
   							</div><br>
   							<button type="button" class="btn btn-primary" name="filename" wire:click.prevent="fileupload">Upload</button>
   						</form>
   					</div>
   				</div>
   			</div>
   		</div>
   	</div>
   </section>
</div>
