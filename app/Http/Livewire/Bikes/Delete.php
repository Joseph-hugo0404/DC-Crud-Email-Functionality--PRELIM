<?php

namespace App\Http\Livewire\Bikes;

use App\Models\Bike;
use Livewire\Component;

class Delete extends Component
{
    public $bikeId;
    public function getBikeProperty() {
        return Bike::select('id', 'name', 'contact_number', 'brand', 'price', 'buy_date')
            ->find($this->bikeId);
    }

    public function delete() {
        $this->bike->delete();

        return redirect('/dashboard')->with('message', $this->bike->name . ' deleted successfully');
    }

    public function back() {
        return redirect('/dashboard');
    }

    public function render()
    {
        return view('livewire.bikes.delete');
    }
}
