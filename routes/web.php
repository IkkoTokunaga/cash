<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Welcome\Welcome;
use App\Livewire\Welcome\Document;
use App\Livewire\Dashboard\Home;
use App\Livewire\Transaction\Create as TransactionCreate;
use App\Livewire\Transaction\Edit as TransactionEdit;
use App\Livewire\Transaction\Show as TransactionShow;
use App\Livewire\Account\Show as AccountShow;
use App\Livewire\TargetUser\Show as TargetUserShow;
use App\Livewire\TargetUser\Create as TargetUserCreate;
use App\Livewire\TargetUser\Edit as TargetUserEdit;
use App\Livewire\Support\Create as SupportCreate;
use App\Livewire\Support\Success as SupportSuccess;
use App\Http\Controllers\GoogleController;

Route::get('/', Welcome::class)->name('welcome');

Route::get('/document', Document::class)->name('document');

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('dashboard', Home::class)->name('dashboard');
    Route::view('profile', 'profile')->name('profile');

    Route::get('transaction/create', TransactionCreate::class)->name('transaction.create');
    Route::get('transaction/edit/{id}', TransactionEdit::class)->name('transaction.edit');
    Route::get('transaction/{month?}', TransactionShow::class)->name('transaction.show');

    Route::get('account', AccountShow::class)->name('account.show');
    Route::get('target_user', TargetUserShow::class)->name('target_user.show');
    Route::get('target_user/create', TargetUserCreate::class)->name('target_user.create');
    Route::get('target_user/edit/{id}', TargetUserEdit::class)->name('target_user.edit');

    Route::get('support', SupportCreate::class)->name('support.create');
    Route::get('support/success', SupportSuccess::class);

});

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

require __DIR__ . '/auth.php';
