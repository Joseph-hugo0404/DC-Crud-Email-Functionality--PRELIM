<?php

namespace App\Http\Livewire\Bikes;

use App\Models\Bike;
use Livewire\Component;

class Create extends Component
{
    public $name, $email, $address, $contact_number, $brand, $price, $buy_date;

    public function addBike(){

            $this->validate([
                'name'              => ['required','string','max:255'],
                'email'             => ['required','email','unique:bikes'],
                'address'           => ['required','string','max:255'],
                'contact_number'    => ['required','numeric','digits:11'],
                'brand'             => ['required','string','max:255'],
                'price'             => ['required','string', 'max:255'],
                'buy_date'          => ['required', 'string','max:255'],
            ]);

            Bike::create([
                'name'              => $this->name,
                'email'             => $this->email,
                'address'           => $this->address,
                'contact_number'    => $this->contact_number,
                'brand'             => $this->brand,
                'price'             => $this->price,
                'buy_date'          => $this->buy_date
            ]);

            return redirect('/dashboard')->with('message', $this->name . ' added successfully');
    }

    public function updated($propertyEmail)
    {
        $this->validateOnly($propertyEmail, [
            'email'             => ['required','email','unique:bikes'],
        ]);
    }

    public function render()
    {
        return view('livewire.bikes.create');
    }
}
