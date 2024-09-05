<?php

namespace App\Livewire\Support;

use App\Livewire\Support\Create;
use App\Models\Support;
use Carbon\Carbon;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\GoogleController;

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

        if ($isSaved) {
            $gmail = new GoogleController();
            $gmail->sendGmail(
                $this->email,
                'お問合せありがとうございます。',
                view(
                    'mail.support',
                    [
                        'name' => $this->name,
                        'body' => $this->content
                    ]
                )
            );
            $gmail->sendGmail(
                'cash.canvas.info@gmail.com',
                'お問合せ通知',
                view(
                    'mail.support_admin',
                    [
                        'name' => $this->name,
                        'email' => $this->email,
                        'body' => $this->content
                    ]
                )
            );
        }

        $this->mount();
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
        );
    }
}
