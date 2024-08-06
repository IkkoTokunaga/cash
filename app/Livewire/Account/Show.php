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
            'created_at' => now(),
            'updated_at' => now(),
        ];
        Account::store($insertData, $this->account_id);
        $this->mount();
    }

    public function edit($id)
    {
        if ($id) {
            $account = Account::getById($id);
            $this->account_id = $id;
            $this->account_name = $account->name;
        }
    }

    public function delete($id)
    {
        if ($id) {
            Account::deleteById($id);
            $this->mount();
        }
    }


    public function render()
    {

        return view(
            'livewire.account.show'
        )->layout('layouts.app');
    }
}
