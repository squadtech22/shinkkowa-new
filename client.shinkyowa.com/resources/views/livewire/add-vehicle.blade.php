<div>

    <div class="container-fluid py-4">
      <div class="card mb-4">
        <div class="card-header pb-0 px-3">
            <h6 class="mb-0">{{ __('Auction Details') }}</h6>
        </div>
        <div class="card-body pt-4 p-3">
            <form wire:submit.prevent="save" action="#" method="POST" role="form text-left" enctype="multipart/form-data">
                
                <div class="form-group">
                    <label for="user_id">Client</label>
                    <select class="form-control" wire:model="user_id" id="user_id" name="user_id" required>
                        <option value="null" selected hidden disabled>Select Client</option>
                        @foreach ($clients as $client)
                            <option value="{{ $client->id }}">{{ $client->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="auction_name">Auction Name</label>
                    <input type="text" class="form-control" wire:model="auction_name" id="auction_name" name="auction_name" placeholder="Enter Auction Name" required>
                </div>
                <div class="form-group">
                    <label for="port_name">Port Name</label>
                    <input type="text" class="form-control" wire:model="port_name" id="port_name" name="port_name" placeholder="Enter Port Name" required>
                </div>
                <div class="form-group">
                    <label for="price">Total Price</label>
                    <input type="number" class="form-control" wire:model="price" id="price" name="price" placeholder="Enter Total Price" required>
                </div>
                <div class="form-group">
                    <label for="advance">Advance Amount</label>
                    <input type="number" class="form-control" wire:model="advance" id="advance" name="advance" placeholder="Enter Advance Amount" required>
                </div>

                <span class="m-5"></span>

                <h5>Vehicle Details: </h5>
                <hr class="mb-3">
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="chassis_no">Chasis No</label>
                            <input type="text" class="form-control" wire:model="chassis_no" id="chassis_no" name="chassis_no" placeholder="Enter Chasis No">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="make">Make</label>
                            <input type="text" class="form-control" wire:model="make" id="make" name="make" placeholder="Enter Make">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="model">Model</label>
                            <input type="text" class="form-control" wire:model="model" id="model" name="model" placeholder="Enter Model">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="year">Year</label>
                            <input type="text" class="form-control" wire:model="year" id="year" name="year" placeholder="Enter Year">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="mileage">Mileage</label>
                            <input type="text" class="form-control" wire:model="mileage" id="mileage" name="mileage" placeholder="Enter Mileage">
                        </div>
                    </div>
                    <div class="form-group">
                            <label for="color" class="form-control-label">Color</label>
                            <input class="form-control" type="color" value="#5e72e4" wire:model="color" id="color" name="color">
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="country_stock">Country Stock</label>
                            <input type="text" class="form-control" wire:model="country_stock" id="country_stock" name="country_stock" placeholder="Enter Country Stock">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="price_fob">Price</label>
                            <input type="text" class="form-control" wire:model="price_fob" id="price_fob" name="price_fob" placeholder="Enter Price">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="drive_train">Drivetrain</label>
                            <input type="text" class="form-control" wire:model="drive_train" id="drive_train" name="drive_train" placeholder="Enter Drivetrain">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="grade">Grade</label>
                            <input type="text" class="form-control" wire:model="grade" id="grade" name="grade" placeholder="Enter Grade">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="engine_power">Engine Power</label>
                            <input type="text" class="form-control" wire:model="engine_power" id="engine_power" name="engine_power" placeholder="Enter Engine Power">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="transmission">Transmission</label>
                            <input type="text" class="form-control" wire:model="transmission" id="transmission" name="transmission" placeholder="Enter Transmission">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="fuel_type">Fuel Type</label>
                            <input type="text" class="form-control" wire:model="fuel_type" id="fuel_type" name="fuel_type" placeholder="Enter Fuel Type">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="vehicle_category">Vehicle Category</label>
                            <input type="text" class="form-control" wire:model="vehicle_category" id="vehicle_category" name="vehicle_category" placeholder="Enter Vehicle Category">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="steering_side">Steering Side</label>
                            <input type="text" class="form-control" wire:model="steering_side" id="steering_side" name="steering_side" placeholder="Enter Steering Side">
                        </div>
                    </div>
                    
                    <div class="col-md-12 p-3">
                        <div class="row">
                            
                            <div class="col-md-3">
                                <div class="form-check" style="display: inline-block; margin-right: 20px;">
                                    <input class="form-check-input" type="checkbox" value="1" name="central_locking" id="central_locking" wire:model="central_locking">
                                    <label class="custom-control-label" for="central_locking">Central Locking</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check" style="display: inline-block; margin-right: 20px;">
                                    <input class="form-check-input" type="checkbox" value="1" name="power_windows" id="power_windows" wire:model="power_windows">
                                    <label class="custom-control-label" for="power_windows">Power Windows</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check" style="display: inline-block; margin-right: 20px;">
                                    <input class="form-check-input" type="checkbox" value="1" name="power_side_mirrors" id="power_side_mirrors" wire:model="power_side_mirrors">
                                    <label class="custom-control-label" for="power_side_mirrors">Power Side Mirrors</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check" style="display: inline-block; margin-right: 20px;">
                                    <input class="form-check-input" type="checkbox" value="1" name="retractable_side_mirrors" id="retractable_side_mirrors" wire:model="retractable_side_mirrors">
                                    <label class="custom-control-label" for="retractable_side_mirrors">Retractable Side Mirrors</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check" style="display: inline-block; margin-right: 20px;">
                                    <input class="form-check-input" type="checkbox" value="1" name="power_front_doors" id="power_front_doors" wire:model="power_front_doors">
                                    <label class="custom-control-label" for="power_front_doors">Power Front Doors</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check" style="display: inline-block; margin-right: 20px;">
                                    <input class="form-check-input" type="checkbox" value="1" name="power_back_doors" id="power_back_doors" wire:model="power_back_doors">
                                    <label class="custom-control-label" for="power_back_doors">Power Back Doors</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check" style="display: inline-block; margin-right: 20px;">
                                    <input class="form-check-input" type="checkbox" value="1" name="airbags" id="airbags" wire:model="airbags">
                                    <label class="custom-control-label" for="airbags">Airbags</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check" style="display: inline-block; margin-right: 20px;">
                                    <input class="form-check-input" type="checkbox" value="1" name="power_steering" id="power_steering" wire:model="power_steering">
                                    <label class="custom-control-label" for="power_steering">Power Steering</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check" style="display: inline-block; margin-right: 20px;">
                                    <input class="form-check-input" type="checkbox" value="1" name="ABS" id="ABS" wire:model="ABS">
                                    <label class="custom-control-label" for="ABS">ABS</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check" style="display: inline-block; margin-right: 20px;">
                                    <input class="form-check-input" type="checkbox" value="1" name="VSA" id="VSA" wire:model="VSA">
                                    <label class="custom-control-label" for="VSA">VSA</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check" style="display: inline-block; margin-right: 20px;">
                                    <input class="form-check-input" type="checkbox" value="1" name="EBD" id="EBD" wire:model="EBD">
                                    <label class="custom-control-label" for="EBD">EBD</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check" style="display: inline-block; margin-right: 20px;">
                                    <input class="form-check-input" type="checkbox" value="1" name="diff_lock" id="diff_lock" wire:model="diff_lock">
                                    <label class="custom-control-label" for="diff_lock">Diff Lock</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check" style="display: inline-block; margin-right: 20px;">
                                    <input class="form-check-input" type="checkbox" value="1" name="hill_assist" id="hill_assist" wire:model="hill_assist">
                                    <label class="custom-control-label" for="hill_assist">Hill Assist</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check" style="display: inline-block; margin-right: 20px;">
                                    <input class="form-check-input" type="checkbox" value="1" name="cruise_control" id="cruise_control" wire:model="cruise_control">
                                    <label class="custom-control-label" for="cruise_control">Cruise Control</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check" style="display: inline-block; margin-right: 20px;">
                                    <input class="form-check-input" type="checkbox" value="1" name="radar_system" id="radar_system" wire:model="radar_system">
                                    <label class="custom-control-label" for="radar_system">Radar System</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check" style="display: inline-block; margin-right: 20px;">
                                    <input class="form-check-input" type="checkbox" value="1" name="brake_assist" id="brake_assist" wire:model="brake_assist">
                                    <label class="custom-control-label" for="brake_assist">Brake Assist</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check" style="display: inline-block; margin-right: 20px;">
                                    <input class="form-check-input" type="checkbox" value="1" name="lane_assist" id="lane_assist" wire:model="lane_assist">
                                    <label class="custom-control-label" for="lane_assist">Lane Assist</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check" style="display: inline-block; margin-right: 20px;">
                                    <input class="form-check-input" type="checkbox" value="1" name="lane_keep" id="lane_keep" wire:model="lane_keep">
                                    <label class="custom-control-label" for="lane_keep">Lane Keep</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check" style="display: inline-block; margin-right: 20px;">
                                    <input class="form-check-input" type="checkbox" value="1" name="front_cam" id="front_cam" wire:model="front_cam">
                                    <label class="custom-control-label" for="front_cam">Front Cam</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check" style="display: inline-block; margin-right: 20px;">
                                    <input class="form-check-input" type="checkbox" value="1" name="reverse_cam" id="reverse_cam" wire:model="reverse_cam">
                                    <label class="custom-control-label" for="reverse_cam">Reverse Cam</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check" style="display: inline-block; margin-right: 20px;">
                                    <input class="form-check-input" type="checkbox" value="1" name="parking_sensors" id="parking_sensors" wire:model="parking_sensors">
                                    <label class="custom-control-label" for="parking_sensors">Parking Sensors</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check" style="display: inline-block; margin-right: 20px;">
                                    <input class="form-check-input" type="checkbox" value="1" name="sunroof" id="sunroof" wire:model="sunroof">
                                    <label class="custom-control-label" for="sunroof">Sun Roof</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check" style="display: inline-block; margin-right: 20px;">
                                    <input class="form-check-input" type="checkbox" value="1" name="tv_navigation" id="tv_navigation" wire:model="tv_navigation">
                                    <label class="custom-control-label" for="tv_navigation">Tv Navigation</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check" style="display: inline-block; margin-right: 20px;">
                                    <input class="form-check-input" type="checkbox" value="1" name="cool_box" id="cool_box" wire:model="cool_box">
                                    <label class="custom-control-label" for="cool_box">Cool Box</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check" style="display: inline-block; margin-right: 20px;">
                                    <input class="form-check-input" type="checkbox" value="1" name="leather_seats" id="leather_seats" wire:model="leather_seats">
                                    <label class="custom-control-label" for="leather_seats">Leather Seats</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check" style="display: inline-block; margin-right: 20px;">
                                    <input class="form-check-input" type="checkbox" value="1" name="auto_wing" id="auto_wing" wire:model="auto_wing">
                                    <label class="custom-control-label" for="auto_wing">Auto Wing</label>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="images">Upload Images</label>
                            <input type="file" class="form-control" wire:model="images" id="images" name="images[]" accept="image/*" multiple>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="details">Details</label>
                            <textarea class="form-control" placeholder="Enter Details" wire:model="details" id="details" name="details" rows="5"></textarea>
                        </div>
                    </div>                    

                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Save Changes' }}</button>
                </div>
            </form>
        </div>
      </div>
    </div>
    
</div>
