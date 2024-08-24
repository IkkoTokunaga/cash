<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Home extends Component
{

    public $user_name;

    public function mount()
    {
        $this->user_name = Auth::user()->name;
    }


    public function render()
    {
        return view(
            'livewire.dashboard.home'
        );
    }
}
