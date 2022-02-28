<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

use Livewire\Component;

class UserProfile extends Component
{
    public User $user;
    public $showSuccesNotification  = false;
    public $showSuccesNotificationPassword  = false;
    
    public $new_password;
    public $confirm_password;

    protected $rules = [
        'user.name' => 'max:40|min:3',
        'user.email' => 'email',
        'user.phone' => 'max:13',
        'user.about' => 'max:200',
        'user.location' => 'min:3',
    ];

    public function mount() { 
        $this->user = auth()->user();
    }

    public function save() {
        $this->validate();
        $this->user->save();
        $this->showSuccesNotification = true;
    }

    public function changePassword() {
        
        $this->validate([
            'new_password' => 'required|min:8',
            'confirm_password' => 'same:new_password',
        ]);

        $this->user->update(['password'=> Hash::make($this->new_password)]);
        $this->showSuccesNotificationPassword = true;
        $this->new_password = $this->confirm_password = null;
    }

    public function render()
    {
        return view('livewire.user-profile');
    }
}