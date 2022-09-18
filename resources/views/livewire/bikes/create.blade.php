<div>
   <div class="card">
    <div class="card-header bg-info">
        <h3>Buyers Form</h3>
    </div>
    <div class="card-body">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" wire:model.defer='name'>
            <label for="name">Buyer Name</label>
            @error('name')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" wire:model.debounce.500ms='email'>
            <label for="email">Email</label>
            @error('email')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" wire:model.defer='address'>
            <label for="address">Address</label>
            @error('address')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" wire:model.defer='contact_number'>
            <label for="contact_number">Contact Number</label>
            @error('contact_number')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="form-floating mb-3">
           <select name="brand" class="form-select" wire:model.defer='brand'>
            <option hidden="true">Select Brand</option>
            <option selected disabled>Select Brand</option>
            <option value="Rockrider Mountain Bike ST 530">Rockrider Mountain Bike ST 530y</option>
            <option value="Rockrider Women’s Mountain Bike ST 100">Rockrider Women’s Mountain Bike ST 100</option>
            <option value="SAVA Deck 6.0 Deore 30S Mountain Bike">SAVA Deck 6.0 Deore 30S Mountain Bike</option>
            <option value="Battle Excellence 880">Battle Excellence 880</option>
            <option value="College of Education">College of Education</option>
            <option value="Battle 518 Mountain Bike">Battle 518 Mountain Bike</option>
           </select>
           <label for="brand">Brand</label>
           @error('brand')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" wire:model.defer='price'>
            <label for="price">Price</label>
            @error('price')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" wire:model.defer='buy_date'>
            <label for="buy_date">Date Buyed</label>
            @error('buy_date')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
         <div class="form-group mb-3 d-grid gap-2 d-md-flex justify-content-end">
            <button class="btn btn-primary" type="submit" wire:click='addBike()'>
                Add Buyer
            </button>
         </div>
    </div>
   </div>
</div>
