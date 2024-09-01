<?php

namespace App\Livewire\TargetUser;

use Livewire\Component;
use App\Models\TargetUser;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class Edit extends Component
{
    public $code;

    #[Validate('bail|required|string|max:255')]
    public $name;
    #[Validate('bail|string|max:255|nullable')]
    public $kana;
    #[Validate('bail|string|max:21|nullable')]
    public $tel;
    #[Validate('bail|string|max:255|email|nullable')]
    public $email;
    #[Validate('bail|max:255|nullable')]
    public $address = '';
    #[Validate('bail|max:255|nullable')]
    public $description = '';

    public function save()
    {
        $this->validate();

        $insertData = [
            'code' => $this->code,
            'user_id' => Auth::id(),
            'name' => $this->name,
            'kana' => $this->kana,
            'tel' => $this->tel,
            'email' => $this->email,
            'address' => $this->address,
            'description' => $this->description,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        Log::debug('target user insert data : ' . print_r($insertData, true));
        $isSaved = TargetUser::store($insertData, $this->code);

        $message = $isSaved ?
            '保存しました。' :
            '処理に失敗しました。';
        session()->flash('saved_message', $message);
        session()->flash('saved_target_user_id', $isSaved);

        return $this->redirect('/target_user', true);
    }

    public function messages()
    {
        return [
            'name.required' => '名前は必須項目です。',
            'name.max' => '名前は255文字以内で入力してください。',
            'kana.max' => '名前（読み方）は255文字以内で入力してください。',
            'tel.max' => '電話番号は21文字以内で入力してください。',
            'email.max' => 'Emailは255文字以内で入力してください。',
            'email.email' => 'Emailを正しく入力してください。',
            'address.max' => '住所は255文字以内で入力してください。',
            'description.max' => '備考は255文字以内で入力してください。',
        ];
    }

    public function mount($id)
    {
        $this->code = $id;
        $targetUser = TargetUser::getById($id);
        $this->name = $targetUser->name;
        $this->kana = $targetUser->kana;
        $this->tel = $targetUser->tel;
        $this->email = $targetUser->email;
        $this->address = $targetUser->address;
        $this->description = $targetUser->description;


    }

    public function render()
    {
        return view(
            'livewire.target_user.create'
        )->layout('layouts.app');
    }
}
