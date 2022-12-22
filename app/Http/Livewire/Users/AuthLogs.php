<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Livewire\Component;

class AuthLogs extends Component
{
    public User $user;

    public function render()
    {
        return view('livewire.users.auth-logs');
    }
}