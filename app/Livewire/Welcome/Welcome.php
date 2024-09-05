<?php

namespace App\Livewire\Welcome;

use Livewire\Component;

class Welcome extends Component
{
    public function render()
    {
        return view(
            'welcome'
        )->layout('layouts.guest');
    }
}
