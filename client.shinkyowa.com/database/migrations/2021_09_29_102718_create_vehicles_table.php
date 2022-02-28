<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('make')->nullable();
            $table->string('model')->nullable();
            $table->string('year')->nullable();
            $table->string('mileage')->nullable();
            $table->string('color')->nullable();
            $table->string('country_stock')->nullable();
            $table->string('price_fob')->nullable();
            $table->string('drive_train')->nullable();
            $table->string('grade')->nullable();
            $table->string('engine_power')->nullable();
            $table->string('transmission')->nullable();
            $table->string('fuel_type')->nullable();
            $table->string('vehicle_category')->nullable();
            $table->string('steering_side')->nullable();
            $table->boolean('central_locking')->default(0);
            $table->boolean('power_windows')->default(0);
            $table->boolean('power_side_mirrors')->default(0);
            $table->boolean('retractable_side_mirrors')->default(0);
            $table->boolean('power_front_doors')->default(0);
            $table->boolean('power_back_doors')->default(0);
            $table->boolean('airbags')->default(0);
            $table->boolean('power_steering')->default(0);
            $table->boolean('ABS')->default(0);
            $table->boolean('VSA')->default(0);
            $table->boolean('EBD')->default(0);
            $table->boolean('diff_lock')->default(0);
            $table->boolean('hill_assist')->default(0);
            $table->boolean('cruise_control')->default(0);
            $table->boolean('radar_system')->default(0);
            $table->boolean('brake_assist')->default(0);
            $table->boolean('lane_assist')->default(0);
            $table->boolean('lane_keep')->default(0);
            $table->boolean('front_cam')->default(0);
            $table->boolean('reverse_cam')->default(0);
            $table->boolean('parking_sensors')->default(0);
            $table->boolean('sunroof')->default(0);
            $table->boolean('tv_navigation')->default(0);
            $table->boolean('cool_box')->default(0);
            $table->boolean('leather_seats')->default(0);
            $table->boolean('auto_wing')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
