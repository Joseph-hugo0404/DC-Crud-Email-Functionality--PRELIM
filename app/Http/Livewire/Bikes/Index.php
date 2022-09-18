<?php

namespace App\Http\Livewire\Bikes;

use App\Models\Bike;
use Livewire\Component;

class Index extends Component
{
    public function loadBikes() {
        $bikes = Bike::orderBy('name')->get();

        return compact('bikes');
    }

    public function render()
    {
        return view('livewire.bikes.index', $this->loadBikes());
    }
}
