<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Auth\SignUp;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\ForgotPassword;
use App\Http\Livewire\Auth\ResetPassword;

use App\Http\Livewire\UserProfile;
use App\Http\Livewire\UserManagement;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\AddUser;
use App\Http\Livewire\EditUser;
use App\Http\Livewire\AddVehicle;
use App\Http\Livewire\CurrentOrders;
use App\Http\Livewire\AllOrders;
use App\Http\Livewire\ShowTimeline;
use App\Http\Livewire\ShowCar;

use App\Models\User;
use App\Models\Auction;
use App\Models\Vehicle;
use App\Models\Image;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', Login::class)->name('login');

Route::get('/login', Login::class)->name('login');

Route::get('/login/forgot-password', ForgotPassword::class)->name('forgot-password');
 
Route::get('/reset-password/{id}', ResetPassword::class)->name('reset-password')->middleware('signed');

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', Dashboard::class)->name('dashboard');

    Route::get('/user-profile', UserProfile::class)->name('user-profile');

    Route::get('/user-management', UserManagement::class)->name('user-management');

    Route::get('/add-user', AddUser::class)->name('add-user');

    Route::get('/edit-user/{id}', EditUser::class)->name('edit-user');

    Route::get('/delete-user/{id}', function($id) {
        
        $user = User::find($id);
        $user->delete();
        return redirect()->back();

    })->name('delete-user');

    Route::get('/add-vehicle', AddVehicle::class)->name('add-vehicle');

    Route::get('/current-orders', CurrentOrders::class)->name('current-orders');

    Route::get('/all-orders', AllOrders::class)->name('all-orders');

    Route::get('/show-timeline/{id}', ShowTimeline::class)->name('show-timeline');

    Route::get('/show-car/{id}', ShowCar::class)->name('show-car');

    Route::get('/delete-order/{id}', function($id) {
        
        $auction = Auction::find($id);
        $vehicle = Vehicle::find($auction->vehicle_id);
        $images = Image::where('vehicle_id', $vehicle->id)->delete();
        $auction->delete();
        $vehicle->delete();        
        return redirect()->back();

    });
    
});