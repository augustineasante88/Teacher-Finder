<?php

namespace App\Http\Livewire\Frontend;

use App\Models\User;
use Livewire\Component;

class AllTeachersPage extends Component
{
    public $search;

    public function render()
    {
        if($this->search != ''){
            $users = User::where('user_type', '=', 2)
            ->where('name', 'LIKE', '%'.$this->search.'%')
            ->orWhere('price', 'LIKE', '%'.$this->search.'%')
            ->orWhere('subject', 'LIKE', '%'.$this->search.'%')
            ->paginate(15);
            return view('livewire.frontend.all-teachers-page', compact('users'));
        }

        if(empty($this->search)){

            $users = User::where('user_type', '=', 2)->paginate(15);
            return view('livewire.frontend.all-teachers-page', compact('users'));
        }
       
    }
}
