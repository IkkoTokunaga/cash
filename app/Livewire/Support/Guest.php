<?php

namespace App\Livewire\Support;

use App\Livewire\Support\Create;
use App\Models\Support;
use Carbon\Carbon;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class Guest extends Create
{

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
        $isSaved = Support::store($insertData);
        $message = $isSaved ?
            '問い合わせが完了しました。' :
            '処理に失敗しました';
        session()->flash('saved_message', $message);
        session()->flash('saved_support_id', $isSaved);

        $this->mount();
        // return $this->redirect('/support/success');
    }

    public function mount()
    {
        $this->name = '';
        $this->email = '';
        $this->content = '';
    }

    public function render()
    {
        return view(
            'livewire.support.guest'
        )->layout('layouts.app');
    }
}
