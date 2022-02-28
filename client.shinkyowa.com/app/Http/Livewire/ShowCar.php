<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Vehicle;

class ShowCar extends Component
{
    public $vehicle;
    
    public function mount($id)
    {
        $this->vehicle = Vehicle::find($id);
    }

    public function render()
    {
        return view('livewire.show-car', [
            'vehicle' => $this->vehicle
        ]);
    }
}
