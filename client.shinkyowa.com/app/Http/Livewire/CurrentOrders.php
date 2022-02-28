<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Auction;

class CurrentOrders extends Component
{
    public function render()
    {
        return view('livewire.current-orders', [
            'orders' => Auction::where('user_id', auth()->user()->id)->get()
        ]);
    }
}
