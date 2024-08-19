<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Transaction\Create as TransactionCreate;
use App\Livewire\Transaction\Edit as TransactionEdit;
use App\Livewire\Transaction\Show as TransactionShow;
use App\Livewire\Account\Show as AccountShow;
use App\Livewire\Support\Create as SupportCreate;
use App\Livewire\Support\Success as SupportSuccess;

Route::view('/', 'welcome');
Route::view('/document', 'document')->name('document');

Route::middleware(['auth', 'verified'])->group(function () {

    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::view('profile', 'profile')->name('profile');

    Route::get('transaction/create', TransactionCreate::class)->name('transaction.create');
    Route::get('transaction/edit/{id}', TransactionEdit::class)->name('transaction.edit');
    Route::get('transaction/{month?}', TransactionShow::class)->name('transaction.show');

    Route::get('account', AccountShow::class)->name('account.show');

    Route::get('support', SupportCreate::class)->name('support.create');
    Route::get('support/success', SupportSuccess::class);

});

require __DIR__ . '/auth.php';
