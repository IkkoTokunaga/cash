<?php

namespace App\Livewire\Transaction;

use Livewire\Component;
use App\Models\Account;
use App\Models\Transaction;
use App\Models\Summary;
use Carbon\Carbon;
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

    public $accounts;

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
        $isSaved = Transaction::store($insertData, $this->id);

        $message = $isSaved ?
            '保存しました。' :
            '処理に失敗しました。';
        session()->flash('saved_message', $message);
        session()->flash('saved_transaction_id', $isSaved);

        return $this->redirect('/transaction');
    }

    public function mount($id)
    {
        $transaction = Transaction::getById($id);

        // 既に締めていれば表示不可
        $summary = Summary::get(
            Carbon::parse($transaction->date)->endOfMonth()->format('Y-m-d')
        );
        if ($summary) return redirect(route('dashboard'));

        $this->id = $transaction->id;
        $this->user_id = $transaction->user_id;
        $this->date = $transaction->date;
        $this->description = $transaction->description;
        $this->account_id = $transaction->account_id;
        $this->selected_payment_type = $transaction->income > 0 ? 'income' : 'expense';
        $this->payment = $transaction->income > 0 ? intval($transaction->income) : intval($transaction->expense);

        $this->accounts = Account::get();
    }

    public function messages()
    {
        return [
            'date.required' => '日付は必須項目です。',
            'date.date_format' => '日付フォーマットが誤っています。',
            'date.isnot_monthly_closing' => '既に締め処理を行っているため、修正できません。',
            'account_id.required' => '科目は必須項目です。',
            'account_id.numeric' => '科目のデータ形式が誤っています。',
            'description.required' => '摘要を入力してください。',
            'description.max' => '摘要は200文字以内で入力してください。',
            'selected_payment_type.required' => '収支タイプを選択してください。',
            'selected_payment_type.in' => '収支タイプを選択してください。',
            'payment.required' => '金額を入力してください。',
            'payment.numeric' => '金額を入力してください。',
        ];
    }

    public function render()
    {
        return view(
            'livewire.transaction.edit'
        );
    }
}
