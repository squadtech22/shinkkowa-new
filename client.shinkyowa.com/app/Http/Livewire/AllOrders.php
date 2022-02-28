<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Auction;

class AllOrders extends Component
{
    public function render()
    {
        return view('livewire.all-orders', [
            'orders' => Auction::all()
        ]);
    }
}
