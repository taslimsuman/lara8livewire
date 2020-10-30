<div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label>First Name</label>
            <input type="text" class="form-control" name="firstname" wire:model="firstname">
              @error('firstname')
              <p class="text-danger">{{$message}}</p>
              @enderror
          </div>
          <div class="form-group">
            <label>Last Name</label>
            <input type="text" class="form-control" name="lastname" wire:model="lastname">
             @error('lastname')
              <p class="text-danger">{{$message}}</p>
              @enderror
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" wire:model="email">
             @error('email')
              <p class="text-danger">{{$message}}</p>
              @enderror
          </div>
          <div class="form-group">
            <label>Phone</label>
            <input type="phone" class="form-control" name="phone" wire:model="phone">
             @error('phone')
              <p class="text-danger">{{$message}}</p>
              @enderror
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" wire:click.prevent="store">Save changes</button>
      </div>
    </div>
  </div>
</div>