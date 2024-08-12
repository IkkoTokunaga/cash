<?php

namespace App\Livewire\Support;

use Livewire\Component;
use App\Models\Support;
use Carbon\Carbon;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class Create extends Component
{
    #[Validate('bail|required|max:200')]
    public $name = '';

    #[Validate('bail|required|max:200|email')]
    public $email = '';

    #[Validate('required|max:2000')]
    public $content = '';

    public function save()
    {
        $this->validate();

        $insertData = [
            'user_id' => Auth::id(),
            'date' => Carbon::now()->format('Y-m-d'),
            'time' => Carbon::now()->format('H:i:s'),
            'name' => $this->name,
            'email' => $this->email,
            'content' => $this->content,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        Log::debug('support insert data : ' . print_r($insertData, true));
        Support::store($insertData);

        return $this->redirect('/support/success');
    }

    public function mount()
    {
        $this->name = Auth::user()->name;
        $this->email = Auth::user()->email;
    }

    public function render()
    {
        return view(
            'livewire.support.create'
        )->layout('layouts.app');
    }
}
