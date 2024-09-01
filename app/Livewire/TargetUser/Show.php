<?php

namespace App\Livewire\TargetUser;

use Livewire\Component;
use Carbon\Carbon;
use App\Models\TargetUser;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class Show extends Component
{
    public $account_id;
    public $targetUsers = [];

    #[Validate('required|max:255')]
    public $account_name = '';

    public function mount()
    {
        $this->targetUsers = TargetUser::getAll();
    }

    public function save()
    {
        $this->validate();

        $insertData = [
            'user_id' => Auth::id(),
            'name' => $this->account_name,
            'code' => $this->account_id,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $isSaved = Account::store($insertData, $this->account_id);
        $message = $isSaved ?
            '保存しました。' :
            '処理に失敗しました。';
        session()->flash('saved_message', $message);
        session()->flash('saved_account_id', $isSaved);

        $this->mount();
    }

    public function edit($code)
    {
        if ($code) {
            return $this->redirect('/target_user/edit/' . $code, navigate: true);
        }
    }

    public function delete($id)
    {
        if ($id) {
            TargetUser::deleteById($id);
            $this->mount();
            session()->flash('saved_message', '削除しました。');
        }
    }

    public function messages()
    {
        return [
            'account_name.required' => '科目名は必須項目です。',
            'account_name.max' => '科目名は255文字以内で入力してください。',
        ];
    }

    public function render()
    {

        return view(
            'livewire.target_user.show'
        )->layout('layouts.app');
    }
}
