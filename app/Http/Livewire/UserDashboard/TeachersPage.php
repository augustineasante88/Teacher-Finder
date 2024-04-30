<?php

namespace App\Http\Livewire\UserDashboard;

use App\Models\User;
use Livewire\Component;

class TeachersPage extends Component
{
    public function render()
    {
        $users = User::where('user_type', '=', 1)
        ->orWhere('user_type', '=', 2)
        ->orderBy('created_at', 'desc')
        ->get();
        return view('livewire.user-dashboard.teachers-page', compact('users'));
    }
}
