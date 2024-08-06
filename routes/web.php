<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Transaction\Create as TransactionCreate;
use App\Livewire\Transaction\Edit as TransactionEdit;
use App\Livewire\Transaction\Show as TransactionShow;

Route::get('/', function() {
    return redirect(route('dashboard'));
});

Route::middleware(['auth', 'verified'])->group(function () {

    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::view('profile', 'profile')->name('profile');

    Route::get('transaction/create', TransactionCreate::class)->name('transaction.create');
    Route::get('transaction/edit/{id}', TransactionEdit::class)->name('transaction.edit');
    Route::get('transaction/{month?}', TransactionShow::class)->name('transaction.show');
});

require __DIR__ . '/auth.php';
