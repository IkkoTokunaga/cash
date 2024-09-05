<?php

namespace App\Livewire\Welcome;

use Livewire\Component;

class Document extends Component
{
    public function render()
    {
        return view(
            'document'
        )->layout('layouts.guest');
    }
}
