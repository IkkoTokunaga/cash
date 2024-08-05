<?php

namespace App\Livewire\Transaction;

use Livewire\Component;
use App\Models\Account;
use App\Models\Transaction;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class Create extends Component
{
    #[Validate('bail|required|date_format:Y-m-d|isnot_monthly_closing')]
    public $date = '';

    #[Validate('bail|required|numeric')]
    public $account_id = null;

    #[Validate('required|max:200')]
    public $description = '';

    #[Validate('bail|required|in:income,expense')]
    public $selected_payment_type = null;

    #[Validate('bail|required|numeric')]
    public $payment;

    public $payment_type_list = [
        'income' => '収入',
        'expense' => '支出'
    ];

    public function save()
    {
        $this->validate();

        if ($this->selected_payment_type === 'income') {
            $insertData = [
                'income' => $this->payment,
                'expense' => 0,
            ];
        } else {
            $insertData = [
                'income' => 0,
                'expense' => $this->payment,
            ];
        }
        $insertData += [
            'user_id' => Auth::id(),
            'date' => $this->date,
            'description' => $this->description,
            'account_id' => $this->account_id,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        Log::debug('transaction insert data : ' . print_r($insertData, true));
        Transaction::store($insertData);

        return $this->redirect('/transaction');
    }

    public function mount()
    {
        $this->selected_payment_type = 'income';
    }

    public function render()
    {
        return view(
            'livewire.transaction.create',
            [
                'accounts' => Account::get()
            ]
        )->layout('layouts.app');
    }
}
