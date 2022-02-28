<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_no',
        'vehicle_id',
        'user_id',
        'auction_name',
        'port_name',
        'price',
        'advance',
        'remaining',
        'car_bought',
        'inspection_cleared',
        'car_on_port',
        'car_shipped',
        'car_delivered',
        'payment_recieved'
    ];
}
