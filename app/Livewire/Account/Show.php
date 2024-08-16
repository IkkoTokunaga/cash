<?php

namespace App\Livewire\Account;

use Livewire\Component;
use Carbon\Carbon;
use App\Models\Account;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class Show extends Component
{
    public $account_id;
    public $accounts = [];

    #[Validate('required|max:255')]
    public $account_name = '';

    public function mount()
    {
        $this->accounts = Account::get();
        $this->account_id = null;
        $this->account_name = '';
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
            $account = Account::getById($code);
            $this->account_id = $code;
            $this->account_name = $account->name;
        }
    }

    public function delete($id)
    {
        if ($id) {
            Account::deleteById($id);
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
            'livewire.account.show'
        )->layout('layouts.app');
    }
}
