<div>

<section>
	<div class="container">
		<div class="row">
			<div class="col-md-6">

				<div class="card-default">
				<div class="card-header">
					<h3>Contact Form</h3>
				</div>
				<div class="card-body">
					<form wire:submit.prevent="submitForm">
						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" name="name" class="form-control" wire:model="name">
							@error('name')
							<p class="text-danger">{{$message}}</p>
							@enderror
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" name="email" class="form-control" wire:model="email">
							@error('email')
							<p class="text-danger">{{$message}}</p>
							@enderror
						</div>

						<div class="form-group">
							<label for="phone">Phone</label>
							<input type="text" name="phone" class="form-control" wire:model="phone">
							@error('phone')
							<p class="text-danger">{{$message}}</p>
							@enderror
						</div>
						<div class="form-group">
							<label for="msg">Message</label>
							<textarea class="form-control" rows="6" name="msg" wire:model="msg"></textarea>
							@error('msg')
							<p class="text-danger">{{$message}}</p>
							@enderror
						</div>
					
							
							<button class="btn btn-success">Submit</button>
						

					</form>
				</div>
				
				</div>

			</div>
		</div>
	</div>
</section>
</div>
