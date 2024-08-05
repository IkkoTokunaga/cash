<?php

namespace App\Livewire\Transaction;

use Livewire\Component;
use App\Models\Account;
use App\Models\Transaction;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class Edit extends Component
{
    public $id;
    public $user_id;

    #[Validate('bail|required|date_format:Y-m-d|isnot_monthly_closing')]
    public $date;

    #[Validate('bail|required|numeric')]
    public $account_id;

    #[Validate('required|max:200')]
    public $description;

    #[Validate('bail|required|in:income,expense')]
    public $selected_payment_type;

    #[Validate('bail|required|numeric')]
    public $payment;

    public $payment_type_list = [
        'income' => '収入',
        'expense' => '支出'
    ];

    public $previousUrl;

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

        Log::debug('transaction update data : ' . print_r($insertData, true));
        Transaction::store($insertData, $this->id);

        return $this->redirect('/transaction');
    }

    public function goBack()
    {
        return redirect($this->previousUrl);
    }

    public function mount($id)
    {
        $transaction = Transaction::getById($id);

        $this->id = $transaction->id;
        $this->user_id = $transaction->user_id;
        $this->date = $transaction->date;
        $this->description = $transaction->description;
        $this->account_id = $transaction->account_id;
        $this->selected_payment_type = $transaction->income > 0 ? 'income' : 'expense';
        $this->payment = $transaction->income > 0 ? intval($transaction->income) : intval($transaction->expense);

        $this->previousUrl = url()->previous();
    }

    public function render()
    {
        return view(
            'livewire.transaction.edit',
            [
                'accounts' => Account::get()
            ]
        )->layout('layouts.app');
    }
}
