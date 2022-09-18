<?php

namespace App\Http\Livewire\Bikes;

use App\Models\Bike;
use Livewire\Component;

class Edit extends Component
{
    public $bikeId;
    public $name, $email, $address, $contact_number, $brand, $price, $buy_date;

    public function mount() {
        $this->name             = $this->bike->name;
        $this->email            = $this->bike->email;
        $this->address          = $this->bike->address;
        $this->contact_number   = $this->bike->contact_number;
        $this->brand       = $this->bike->brand;
        $this->price        = $this->bike->price;
        $this->buy_date       = $this->bike->buy_date;

    }

    public function editBike() {
        $this->validate([
            'name'              => ['required','string','max:255'],
            'address'           => ['required','string','max:255'],
            'contact_number'    => ['required','numeric','digits:11'],
            'brand'        => ['required','string','max:255'],
            'price'             => ['required','string','max:255'],
            'buy_date'        => ['required', 'string','max:255'],
        ]);

        $this->bike->update([
            'name'              => $this->name,
            'email'             => $this->email,
            'address'           => $this->address,
            'contact_number'    => $this->contact_number,
            'brand'        => $this->brand,
            'price'        => $this->price,
            'buy_date'        => $this->buy_date
        ]);

        return redirect('/dashboard')->with('message', $this->bike->name .' updated successfully');
    }

    public function back() {
        return redirect('/dashboard');
    }

    public function getBikeProperty() {
        return Bike::find($this->bikeId);
    }

    public function render()
    {
        return view('livewire.bikes.edit');
    }
}
