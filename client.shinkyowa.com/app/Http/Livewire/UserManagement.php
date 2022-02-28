<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class UserManagement extends Component
{
    public function render()
    {
        $users = User::all();
        return view('livewire.user-management', [
            'users' => $users
        ]);
    }
}
