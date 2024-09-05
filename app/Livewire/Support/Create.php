<?php

namespace App\Livewire\Support;

use Livewire\Component;
use App\Models\Support;
use Carbon\Carbon;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\GoogleController;

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
        $isSaved = Support::store($insertData);
        $message = $isSaved ?
            '問い合わせが完了しました。' :
            '処理に失敗しました';
        session()->flash('saved_message', $message);
        session()->flash('saved_support_id', $isSaved);

        if ($isSaved) {
            $gmail = new GoogleController();
            $sent = $gmail->sendGmail(
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
        }
        dd($sent);
        return $this->redirect('/support/success');
    }

    public function mount()
    {
        $this->name = Auth::user()->name;
        $this->email = Auth::user()->email;
    }

    public function messages()
    {
        return [
            'name.required' => 'お名前は必須項目です。',
            'name.max' => 'お名前は200文字以内で入力してください。',
            'email.required' => 'Emailは必須項目です。',
            'email.max' => 'Emailは200文字以内で入力してください。',
            'email.email' => 'Emailの入力形式が誤っています。',
            'content.required' => '内容を入力してください。',
            'content.max' => '内容は1000文字以内で入力してください。',
        ];
    }

    public function render()
    {
        return view(
            'livewire.support.create'
        )->layout('layouts.app');
    }
}
