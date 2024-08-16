<?php

namespace App\Livewire\Transaction;

use Livewire\Component;
use App\Models\Account;
use Carbon\Carbon;
use App\Models\Transaction;
use App\Models\Summary;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class Show extends Component
{
    public $month;
    public $transactions;
    public $prevMonthData;
    public $prevEndOfMonth_Ymd;
    public $prevMonth_Ym;
    public $nextMonth_Ym;
    public $accountList;
    public $balance;
    public $totalIncome;
    public $totalExpense;

    public $thisMonthCloseFlg;
    public $endOfMonth_Ymd;

    public function mount($month = null)
    {
        $this->month = $month ? $month . '-01' : Carbon::now();
        $this->refreshList($this->month);

    }

    public function edit($id)
    {
        if ($id) {
            return $this->redirect('/transaction/edit/' . $id);
        }
    }

    public function delete($id)
    {
        if ($id) {
            if (Transaction::deleteById($id)) {
                $this->refreshList($this->month);
                session()->flash('saved_message', '削除しました。');
            }
        }
    }

    private function refreshList($month)
    {
        $this->month = $month;
        $date = $this->month;
        $year = Carbon::parse($date)->format('Y');
        $month = Carbon::parse($date)->format('m');

        $transactions = [];

        $prevEndOfMonth = Carbon::parse($date)->subMonth()->endOfMonth()->format('Y-m-d');
        $prevMonthSummary = Summary::get($prevEndOfMonth);
        $balance = $prevMonthSummary ? $prevMonthSummary->amount : 0;
        $totalIncome = 0;
        $totalExpense = 0;
        foreach (Transaction::get($year . '-' . $month) as $transaction) {

            $transaction->date = Carbon::parse($transaction->date)->format('Y-m-d');
            $balance += $transaction->income - $transaction->expense;
            $transaction->balance = $balance;
            $transactions[] = $transaction;

            $totalIncome += $transaction->income;
            $totalExpense += $transaction->expense;
        }

        // 既に締めていれば修正不可のため、確認
        $thisMonth = Carbon::parse($date)->endOfMonth()->format('Y-m-d');
        $thisMonthCloseFlg = Summary::get($thisMonth);

        $this->transactions = $transactions;
        $this->prevMonthData = $prevMonthSummary;
        $this->prevEndOfMonth_Ymd = $prevEndOfMonth;
        $this->prevMonth_Ym = Carbon::parse($prevEndOfMonth)->format('Y-m');
        $this->nextMonth_Ym = Carbon::parse($date)->addMonth()->format('Y-m');
        $this->accountList = Account::get();
        $this->balance = $balance;
        $this->totalIncome = $totalIncome;
        $this->totalExpense = $totalExpense;
        $this->thisMonthCloseFlg = $thisMonthCloseFlg;

    }

    public function endOfMonthConfirmation($endOfMonth_Ymd)
    {
        $this->endOfMonth_Ymd = $endOfMonth_Ymd;
        $this->validate(
            [
                'endOfMonth_Ymd' => 'required|date_format:Y-m-d|is_prev_monthly_closing',
            ],
            [
                'endOfMonth_Ymd.required' => '名前は必須項目です。',
                'endOfMonth_Ymd.date_format' => 'フォーマットが不正です',
                'endOfMonth_Ymd.is_prev_monthly_closing' => '前々月の締め処理を行ってから、実行してください。',
            ]
        );
        $endOfMonth = Carbon::parse($endOfMonth_Ymd)->format('Y-m');
        $summary = Transaction::summary($endOfMonth);

        Summary::store([
            'user_id' => Auth::id(),
            'date' => $endOfMonth_Ymd,
            'amount' => $summary->summary ?? 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route(
            'transaction.show',
            Carbon::parse($endOfMonth_Ymd)->addMonth()->format('Y-m')
        );
    }

    public function render()
    {
        return view(
            'livewire.transaction.show',
        )->layout('layouts.app');
    }
}
