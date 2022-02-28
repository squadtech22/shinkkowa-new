<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AddUser extends Component
{
    public $role;
    public $name;
    public $phone;
    public $email;
    public $password;
    public $location;
    
    protected $rules = [
        'role' => 'required',
        'name' => 'required|max:40|min:3',
        'phone' => 'nullable|max:13',
        'email' => 'required|email',
        'password' => 'required|min:8',
        'location' => 'nullable|min:3'
    ];

    public function save(Request $request) {
        $this->validate();
        $user = User::create([
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'location' => $this->location,
        ]);
        $user->assignRole($this->role);
        return redirect('/user-management');
    }

    function generateRandomString($length = 8) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function generate() {
        $this->password = $this->generateRandomString();
    }

    public function render()
    {
        return view('livewire.add-user');
    }
}
