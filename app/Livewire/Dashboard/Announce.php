<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Announce as AnnounceData;

class Announce extends Component
{
    public $announces = [];

    const GET_ANNOUNCE_LIMIT = 5;

    public function mount()
    {
        $this->announces = AnnounceData::getAll(self::GET_ANNOUNCE_LIMIT)->toArray();
    }


    public function render()
    {
        return view(
            'livewire.dashboard.announce'
        );
    }
}
