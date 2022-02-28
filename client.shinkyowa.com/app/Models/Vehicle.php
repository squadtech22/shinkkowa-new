<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'chassis_no',
        'make',
        'model',
        'year',
        'mileage',
        'color',
        'country_stock',
        'price_fob',
        'drive_train',
        'grade',
        'engine_power',
        'transmission',
        'fuel_type',
        'vehicle_category',
        'steering_side',
        'central_locking',
        'power_windows',
        'power_side_mirrors',
        'retractable_side_mirrors',
        'power_front_doors',
        'power_back_doors',
        'airbags',
        'power_steering',
        'ABS',
        'VSA',
        'EBD',
        'diff_lock',
        'hill_assist',
        'cruise_control',
        'radar_system',
        'brake_assist',
        'lane_assist',
        'lane_keep',
        'front_cam',
        'reverse_cam',
        'parking_sensors',
        'sunroof',
        'tv_navigation',
        'cool_box',
        'leather_seats',
        'auto_wing',
        'details',
    ];
}
