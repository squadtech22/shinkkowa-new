<div class="container-fluid py-4">
  
    @php 
      $images = \App\Models\Image::where('vehicle_id', $vehicle->id)->get();
    @endphp
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          @foreach($images as $index => $i)
          <div class="carousel-item @if($index == 0) active @endif">
            <div class="page-header section-height-75 m-3 border-radius-xl" style="background-image: url('/storage/app/photos/{{ $i->images }}');">
            </div>
          </div>
          @endforeach
        </div>
        <div class="section-height-75 position-absolute w-100 top-0">
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon position-absolute bottom-50" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon position-absolute bottom-50" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </a>
        </div>
    </div>

    <h5 class="py-4">Vehicle Details: </h5>
    <div class="row">

      <div class="col-lg-12">
        <ul class="list-group">
          <li class="list-group-item">Chassis no: {{ $vehicle->chassis_no }}</li>
          <li class="list-group-item">Make: {{ $vehicle->make }}</li>
          <li class="list-group-item">Model: {{ $vehicle->model }}</li>
          <li class="list-group-item">Year: {{ $vehicle->year }}</li>
          <li class="list-group-item">Mileage: {{ $vehicle->mileage }}</li>
          <li class="list-group-item">Color: {{ $vehicle->color }}</li>
          <li class="list-group-item">Country Stock: {{ $vehicle->country_stock }}</li>
          <li class="list-group-item">Price FOB: {{ $vehicle->price_fob }}</li>
          <li class="list-group-item">Drivetrain: {{ $vehicle->drive_train }}</li>
          <li class="list-group-item">Grade: {{ $vehicle->grade }}</li>
          <li class="list-group-item">Engine Power: {{ $vehicle->engine_power }}</li>
          <li class="list-group-item">Transmission: {{ $vehicle->transmission }}</li>
          <li class="list-group-item">Fuel Type: {{ $vehicle->fuel_type }}</li>
          <li class="list-group-item">Vehicle Category: {{ $vehicle->vehicle_category }}</li>
          <li class="list-group-item">Steering Side: {{ $vehicle->steering_side }}</li> 
        </ul>
      </div>
      
      <div class="col-lg-12 mt-3">
        <div class="row">
          <div class="col-md-3">
              <div class="form-check" style="display: inline-block; margin-right: 20px;">
                  <input class="form-check-input" type="checkbox" name="central_locking" id="central_locking" @if($vehicle->central_locking == 1) checked @endif>
                  <label class="custom-control-label" for="central_locking">Central Locking</label>
              </div>
          </div>
          <div class="col-md-3">
              <div class="form-check" style="display: inline-block; margin-right: 20px;">
                  <input class="form-check-input" type="checkbox" name="power_windows" id="power_windows" @if($vehicle->power_windows == 1) checked @endif>
                  <label class="custom-control-label" for="power_windows">Power Windows</label>
              </div>
          </div>
          <div class="col-md-3">
              <div class="form-check" style="display: inline-block; margin-right: 20px;">
                  <input class="form-check-input" type="checkbox" name="power_side_mirrors" id="power_side_mirrors" @if($vehicle->power_side_mirrors == 1) checked @endif>
                  <label class="custom-control-label" for="power_side_mirrors">Power Side Mirrors</label>
              </div>
          </div>
          <div class="col-md-3">
              <div class="form-check" style="display: inline-block; margin-right: 20px;">
                  <input class="form-check-input" type="checkbox" name="retractable_side_mirrors" id="retractable_side_mirrors" @if($vehicle->retractable_side_mirrors == 1) checked @endif>
                  <label class="custom-control-label" for="retractable_side_mirrors">Retractable Side Mirrors</label>
              </div>
          </div>
          <div class="col-md-3">
              <div class="form-check" style="display: inline-block; margin-right: 20px;">
                  <input class="form-check-input" type="checkbox" name="power_front_doors" id="power_front_doors" @if($vehicle->power_front_doors == 1) checked @endif>
                  <label class="custom-control-label" for="power_front_doors">Power Front Doors</label>
              </div>
          </div>
          <div class="col-md-3">
              <div class="form-check" style="display: inline-block; margin-right: 20px;">
                  <input class="form-check-input" type="checkbox" name="power_back_doors" id="power_back_doors" @if($vehicle->power_back_doors == 1) checked @endif>
                  <label class="custom-control-label" for="power_back_doors">Power Back Doors</label>
              </div>
          </div>
          <div class="col-md-3">
              <div class="form-check" style="display: inline-block; margin-right: 20px;">
                  <input class="form-check-input" type="checkbox" name="airbags" id="airbags" @if($vehicle->airbags == 1) checked @endif>
                  <label class="custom-control-label" for="airbags">Airbags</label>
              </div>
          </div>
          <div class="col-md-3">
              <div class="form-check" style="display: inline-block; margin-right: 20px;">
                  <input class="form-check-input" type="checkbox" name="power_steering" id="power_steering" @if($vehicle->power_steering == 1) checked @endif>
                  <label class="custom-control-label" for="power_steering">Power Steering</label>
              </div>
          </div>
          <div class="col-md-3">
              <div class="form-check" style="display: inline-block; margin-right: 20px;">
                  <input class="form-check-input" type="checkbox" name="ABS" id="ABS" @if($vehicle->ABS == 1) checked @endif>
                  <label class="custom-control-label" for="ABS">ABS</label>
              </div>
          </div>
          <div class="col-md-3">
              <div class="form-check" style="display: inline-block; margin-right: 20px;">
                  <input class="form-check-input" type="checkbox" name="VSA" id="VSA" @if($vehicle->VSA == 1) checked @endif>
                  <label class="custom-control-label" for="VSA">VSA</label>
              </div>
          </div>
          <div class="col-md-3">
              <div class="form-check" style="display: inline-block; margin-right: 20px;">
                  <input class="form-check-input" type="checkbox" name="EBD" id="EBD" @if($vehicle->EBD == 1) checked @endif>
                  <label class="custom-control-label" for="EBD">EBD</label>
              </div>
          </div>
          <div class="col-md-3">
              <div class="form-check" style="display: inline-block; margin-right: 20px;">
                  <input class="form-check-input" type="checkbox" name="diff_lock" id="diff_lock" @if($vehicle->diff_lock == 1) checked @endif>
                  <label class="custom-control-label" for="diff_lock">Diff Lock</label>
              </div>
          </div>
          <div class="col-md-3">
              <div class="form-check" style="display: inline-block; margin-right: 20px;">
                  <input class="form-check-input" type="checkbox" name="hill_assist" id="hill_assist" @if($vehicle->hill_assist == 1) checked @endif>
                  <label class="custom-control-label" for="hill_assist">Hill Assist</label>
              </div>
          </div>
          <div class="col-md-3">
              <div class="form-check" style="display: inline-block; margin-right: 20px;">
                  <input class="form-check-input" type="checkbox" name="cruise_control" id="cruise_control" @if($vehicle->cruise_control == 1) checked @endif>
                  <label class="custom-control-label" for="cruise_control">Cruise Control</label>
              </div>
          </div>
          <div class="col-md-3">
              <div class="form-check" style="display: inline-block; margin-right: 20px;">
                  <input class="form-check-input" type="checkbox" name="radar_system" id="radar_system" @if($vehicle->radar_system == 1) checked @endif>
                  <label class="custom-control-label" for="radar_system">Radar System</label>
              </div>
          </div>
          <div class="col-md-3">
              <div class="form-check" style="display: inline-block; margin-right: 20px;">
                  <input class="form-check-input" type="checkbox" name="brake_assist" id="brake_assist" @if($vehicle->brake_assist == 1) checked @endif>
                  <label class="custom-control-label" for="brake_assist">Brake Assist</label>
              </div>
          </div>
          <div class="col-md-3">
              <div class="form-check" style="display: inline-block; margin-right: 20px;">
                  <input class="form-check-input" type="checkbox" name="lane_assist" id="lane_assist" @if($vehicle->lane_assist == 1) checked @endif>
                  <label class="custom-control-label" for="lane_assist">Lane Assist</label>
              </div>
          </div>
          <div class="col-md-3">
              <div class="form-check" style="display: inline-block; margin-right: 20px;">
                  <input class="form-check-input" type="checkbox" name="lane_keep" id="lane_keep" @if($vehicle->lane_keep == 1) checked @endif>
                  <label class="custom-control-label" for="lane_keep">Lane Keep</label>
              </div>
          </div>
          <div class="col-md-3">
              <div class="form-check" style="display: inline-block; margin-right: 20px;">
                  <input class="form-check-input" type="checkbox" name="front_cam" id="front_cam" @if($vehicle->front_cam == 1) checked @endif>
                  <label class="custom-control-label" for="front_cam">Front Cam</label>
              </div>
          </div>
          <div class="col-md-3">
              <div class="form-check" style="display: inline-block; margin-right: 20px;">
                  <input class="form-check-input" type="checkbox" name="reverse_cam" id="reverse_cam" @if($vehicle->reverse_cam == 1) checked @endif>
                  <label class="custom-control-label" for="reverse_cam">Reverse Cam</label>
              </div>
          </div>
          <div class="col-md-3">
              <div class="form-check" style="display: inline-block; margin-right: 20px;">
                  <input class="form-check-input" type="checkbox" name="parking_sensors" id="parking_sensors" @if($vehicle->parking_sensors == 1) checked @endif>
                  <label class="custom-control-label" for="parking_sensors">Parking Sensors</label>
              </div>
          </div>
          <div class="col-md-3">
              <div class="form-check" style="display: inline-block; margin-right: 20px;">
                  <input class="form-check-input" type="checkbox" name="sunroof" id="sunroof" @if($vehicle->sunroof == 1) checked @endif>
                  <label class="custom-control-label" for="sunroof">Sun Roof</label>
              </div>
          </div>
          <div class="col-md-3">
              <div class="form-check" style="display: inline-block; margin-right: 20px;">
                  <input class="form-check-input" type="checkbox" name="tv_navigation" id="tv_navigation" @if($vehicle->tv_navigation == 1) checked @endif>
                  <label class="custom-control-label" for="tv_navigation">Tv Navigation</label>
              </div>
          </div>
          <div class="col-md-3">
              <div class="form-check" style="display: inline-block; margin-right: 20px;">
                  <input class="form-check-input" type="checkbox" name="cool_box" id="cool_box" @if($vehicle->cool_box == 1) checked @endif>
                  <label class="custom-control-label" for="cool_box">Cool Box</label>
              </div>
          </div>
          <div class="col-md-3">
              <div class="form-check" style="display: inline-block; margin-right: 20px;">
                  <input class="form-check-input" type="checkbox" name="leather_seats" id="leather_seats" @if($vehicle->leather_seats == 1) checked @endif>
                  <label class="custom-control-label" for="leather_seats">Leather Seats</label>
              </div>
          </div>
          <div class="col-md-3">
              <div class="form-check" style="display: inline-block; margin-right: 20px;">
                  <input class="form-check-input" type="checkbox" name="auto_wing" id="auto_wing" @if($vehicle->auto_wing == 1) checked @endif>
                  <label class="custom-control-label" for="auto_wing">Auto Wing</label>
              </div>
          </div>
        </div>

      </div>
    </div>
    
</div>