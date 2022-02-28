<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Vehicle;
use App\Models\Auction;
use App\Models\Image;
use App\Models\status;

class AddVehicle extends Component
{
    use WithFileUploads;

    public $user_id;
    public $auction_name;
    public $port_name;
    public $price;
    public $advance;
    public $chassis_no;
    public $make;
    public $model;
    public $year;
    public $mileage;
    public $color;
    public $country_stock;
    public $price_fob;
    public $drive_train;
    public $grade;
    public $engine_power;
    public $transmission;
    public $fuel_type;
    public $vehicle_category;
    public $steering_side;
    public $central_locking;
    public $power_windows;
    public $power_side_mirrors;
    public $retractable_side_mirrors;
    public $power_front_doors;
    public $power_back_doors;
    public $airbags;
    public $power_steering;
    public $ABS;
    public $VSA;
    public $EBD;
    public $diff_lock;
    public $hill_assist;
    public $cruise_control;
    public $radar_system;
    public $brake_assist;
    public $lane_assist;
    public $lane_keep;
    public $front_cam;
    public $reverse_cam;
    public $parking_sensors;
    public $sunroof;
    public $tv_navigation;
    public $cool_box;
    public $leather_seats;
    public $auto_wing;
    public $details;
    public $images = [];


    public function render()
    {
        $clients = User::whereHas(
            'roles', function($q){
                $q->where('name', 'client');
            }
        )->get();
        
        return view('livewire.add-vehicle', [
            'clients' => $clients
        ]);
    }

    public function save()
    {
        $vehicle = Vehicle::create([
            'chassis_no' => $this->chassis_no,
            'make' => $this->make,
            'model' => $this->model,
            'year' => $this->year,
            'mileage' => $this->mileage,
            'color' => $this->color,
            'country_stock' => $this->country_stock,
            'price_fob' => $this->price_fob,
            'drive_train' => $this->drive_train,
            'grade' => $this->grade,
            'engine_power' => $this->engine_power,
            'transmission' => $this->transmission,
            'fuel_type' => $this->fuel_type,
            'vehicle_category' => $this->vehicle_category,
            'steering_side' => $this->steering_side,
            'central_locking' => $this->central_locking ?? 0,
            'power_windows' => $this->power_windows ?? 0,
            'power_side_mirrors' => $this->power_side_mirrors ?? 0,
            'retractable_side_mirrors' => $this->retractable_side_mirrors ?? 0,
            'power_front_doors' => $this->power_front_doors ?? 0,
            'power_back_doors' => $this->power_back_doors ?? 0,
            'airbags' => $this->airbags ?? 0,
            'power_steering' => $this->power_steering ?? 0,
            'ABS' => $this->ABS ?? 0,
            'VSA' => $this->VSA ?? 0,
            'EBD' => $this->EBD ?? 0,
            'diff_lock' => $this->diff_lock ?? 0,
            'hill_assist' => $this->hill_assist ?? 0,
            'cruise_control' => $this->cruise_control ?? 0,
            'radar_system' => $this->radar_system ?? 0,
            'brake_assist' => $this->brake_assist ?? 0,
            'lane_assist' => $this->lane_assist ?? 0,
            'lane_keep' => $this->lane_keep ?? 0,
            'front_cam' => $this->front_cam ?? 0,
            'reverse_cam' => $this->reverse_cam ?? 0,
            'parking_sensors' => $this->parking_sensors ?? 0,
            'sunroof' => $this->sunroof ?? 0,
            'tv_navigation' => $this->tv_navigation ?? 0,
            'cool_box' => $this->cool_box ?? 0,
            'leather_seats' => $this->leather_seats ?? 0,
            'auto_wing' => $this->auto_wing ?? 0,
            'details' => $this->details
        ]);

        $auction = Auction::create([
            'order_no' => rand(10000, 99999),
            'vehicle_id' => $vehicle->id,
            'user_id' => $this->user_id,
            'auction_name' => $this->auction_name,
            'port_name' => $this->port_name,
            'price' => $this->price,
            'advance' => $this->advance,
            'remaining' => $this->price - $this->advance
        ]);

        foreach($this->images as $image) {
            
            $name = md5($image . microtime()).'.'.$image->extension();
            $image->storeAs('photos', $name);
            Image::create([
                'vehicle_id' => $vehicle->id,
                'images' => $name
            ]);

        }

        return redirect('/all-orders');
    }
}
