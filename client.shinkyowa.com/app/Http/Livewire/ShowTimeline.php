<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Auction;

class ShowTimeline extends Component
{
    public $auction;
    public $car_bought;
    public $inspection_cleared;
    public $car_on_port;
    public $car_shipped;
    public $car_delivered;
    public $payment_recieved;

    public function mount($id)
    {
        $this->auction = Auction::find($id);
        $this->car_bought = $this->auction->car_bought;
        $this->inspection_cleared = $this->auction->inspection_cleared;
        $this->car_on_port = $this->auction->car_on_port;
        $this->car_shipped = $this->auction->car_shipped;
        $this->car_delivered = $this->auction->car_delivered;
        $this->payment_recieved = $this->auction->payment_recieved;
    }

    public function render()
    {
        return view('livewire.show-timeline', [
            'auction' => $this->auction
        ]);
    }

    public function save()
    {
        $this->auction->update([
            'car_bought' => $this->car_bought ?? 0,
            'inspection_cleared' => $this->inspection_cleared ?? 0,
            'car_on_port' => $this->car_on_port ?? 0,
            'car_shipped' => $this->car_shipped ?? 0,
            'car_delivered' => $this->car_delivered ?? 0,
            'payment_recieved' => $this->payment_recieved ?? 0,
        ]);

        return redirect('/all-orders');
    }
}
