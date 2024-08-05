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

        $this->transactions = $transactions;
        $this->prevMonthData = $prevMonthSummary;
        $this->prevEndOfMonth_Ymd = $prevEndOfMonth;
        $this->prevMonth_Ym = Carbon::parse($prevEndOfMonth)->format('Y-m');
        $this->nextMonth_Ym = Carbon::parse($date)->addMonth()->format('Y-m');
        $this->accountList = Account::get();
        $this->balance = $balance;
        $this->totalIncome = $totalIncome;
        $this->totalExpense = $totalExpense;

    }

    public function endOfMonthConfirmation($endOfMonth_Ymd)
    {
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

        return view(
            'livewire.transaction.show',
            // [
            //     'transactions' => $transactions,
            //     'prevMonthData' => $prevMonthSummary,
            //     'prevEndOfMonth_Ymd' => $prevEndOfMonth,
            //     'prevMonth_Ym' => Carbon::parse($prevEndOfMonth)->format('Y-m'),
            //     'nextMonth_Ym' => Carbon::parse($date)->addMonth()->format('Y-m'),
            //     'accountList' => Account::get(),
            //     'balance' => $balance,
            //     'totalIncome' => $totalIncome,
            //     'totalExpense' => $totalExpense,
            // ]
        )->layout('layouts.app');
    }
}
