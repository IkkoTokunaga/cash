<?php
use Carbon\Carbon;
?>
<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('収支一覧') }}
        </h2>
    </x-slot>

    <div class="sm:py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4 sm:p-8 bg-white sm:rounded-lg border">
                <div class="max-w-full">
                    @if (session()->has('saved_message'))
                        @if (session('saved_transaction_id'))
                            <div class="alert alert-info"> {{ session('saved_message') }} </div>
                        @elseif (session('saved_summary') === true)
                            <div class="alert alert-info"> {{ session('saved_message') }} </div>
                        @else
                            <div class="alert alert-danger"> {{ session('saved_message') }} </div>
                        @endif
                    @endif
                    <div class="flex items-center">
                        <div class="me-5 sm:me-2">
                            <x-secondary-button href="{{ route('transaction.show', $prevMonth_Ym) }}"
                                wire:navigate>◀</x-secondary-button>
                        </div>
                        <div class="me-5 sm:me-2">
                            <h2 class="font-semibold text-l text-gray-800 leading-tight py-2">{{ $currentMonth }}</h2>
                        </div>
                        <div>
                            <x-secondary-button href="{{ route('transaction.show', $nextMonth_Ym) }}"
                                wire:navigate>▶</x-secondary-button>
                        </div>
                    </div>
                    <table class="table table-bordered mt-2">
                        <caption align=top>行を選択することでで編集画面へ移動できます。</caption>
                        <thead class="table-success">
                            <tr>
                                <th class="text-center">日付</th>
                                <th class="text-center hidden md:table-cell">科目</th>
                                <th class="text-center hidden md:table-cell">取引先</th>
                                <th class="text-center">摘要</th>
                                <th class="text-center hidden md:table-cell">収入 (円)</th>
                                <th class="text-center table-cell md:hidden">金額 (円)</th>
                                <th class="text-center hidden md:table-cell">支出 (円)</th>
                                <th class="text-center">残高 (円)</th>
                                @if (!$thisMonthCloseFlg)
                                    <th class="text-center"></th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @if ($prevMonthData)
                                <tr @if (session('saved_summary') === true)  class="table-info" @endif>
                                    <td class="text-center">{{ Carbon::parse($prevEndOfMonth_Ymd)->format('n/j') }}</td>
                                    <td colspan="5" class="text-primary hidden md:table-cell">前月繰越金</td>
                                    <td colspan="2" class="text-primary md:hidden">前月繰越金</td>
                                    <td class="text-end">{{ number_format($prevMonthData->amount) }}</td>
                                    @if (!$thisMonthCloseFlg)
                                        <td></td>
                                    @endif
                                </tr>
                            @else
                                <tr>
                                    <td class="text-center">{{ Carbon::parse($prevEndOfMonth_Ymd)->format('n/j') }}</td>
                                    <td colspan="5" class="hidden md:table-cell">
                                        ❕前月残高が確定されていません<br>
                                        <x-danger-button
                                            wire:click="endOfMonthConfirmation('{{ $prevEndOfMonth_Ymd }}')"
                                            wire:confirm="前月の締め処理を実行します。この処理を行うと前月のデータが確定し、修正ができなくなります。\n実行してもよろしいですか？">
                                            前月残高確定
                                        </x-danger-button>
                                        <x-input-error :messages="$errors->get('endOfMonth_Ymd')" class="mt-2" />
                                    </td>
                                    <td colspan="2" class="md:hidden">
                                        ❕前月残高が確定されていません<br>
                                        <x-danger-button
                                            wire:click="endOfMonthConfirmation('{{ $prevEndOfMonth_Ymd }}')"
                                            wire:confirm="前月の締め処理を実行します。この処理を行うと前月のデータが確定し、修正ができなくなります。\n実行してもよろしいですか？">
                                            前月残高確定
                                        </x-danger-button>
                                        <x-input-error :messages="$errors->get('endOfMonth_Ymd')" class="mt-2" />
                                    </td>
                                    <td></td>
                                    @if (!$thisMonthCloseFlg)
                                        <td></td>
                                    @endif
                                </tr>
                            @endif
                            @foreach ($transactions as $transaction)
                                <tr @if (session('saved_transaction_id') === $transaction->id && session('saved_transaction_id')) class="table-info" @endif
                                    style="cursor: pointer;">
                                    <td class="text-center" wire:click="edit({{ $transaction->id }})">
                                        {{ $transaction->date }}
                                    </td>
                                    <td wire:click="edit({{ $transaction->id }})" class="hidden md:table-cell">
                                        {{ $transaction->account_name }}
                                    </td>
                                    <td wire:click="edit({{ $transaction->id }})" class="hidden md:table-cell">
                                        {{ $transaction->target_user_name }}
                                    </td>
                                    <td wire:click="edit({{ $transaction->id }})">
                                        <span class="md:hidden text-success">
                                            【 科目 】{{ $transaction->account_name }}<br>
                                        </span>
                                        @if ($transaction->target_user_name)
                                            <span class="md:hidden text-success">
                                                【取引先】{{ $transaction->target_user_name }}<br>
                                            </span>
                                        @endif
                                        {{ $transaction->description }}
                                    </td>
                                    <td class="text-end" wire:click="edit({{ $transaction->id }})">
                                        {{ $transaction->income != 0 ? number_format($transaction->income) : '' }}
                                        <span class="md:hidden">
                                            {{ $transaction->expense != 0 ? '-' . number_format($transaction->expense) : '' }}
                                        </span>
                                    </td>
                                    <td class="text-end hidden md:table-cell"
                                        wire:click="edit({{ $transaction->id }})">
                                        {{ $transaction->expense != 0 ? number_format($transaction->expense) : '' }}
                                    </td>
                                    <td class="text-end" wire:click="edit({{ $transaction->id }})">
                                        {{ number_format($transaction->balance) }}</td>
                                    @if (!$thisMonthCloseFlg)
                                        <td>
                                            <div class="d-flex justify-center">
                                                <div wire:click="delete({{ $transaction->id }})"
                                                    wire:confirm="削除されたデータは元に戻せません。よろしいですか?" style="cursor: pointer;">
                                                    <img src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                                        alt="削除" class="min-w-[30px]">
                                                </div>
                                            </div>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                            @if (count($transactions))
                                <tr>
                                    <th colspan="4" class="table-success hidden md:table-cell">合計</th>
                                    <th colspan="2" class="table-success md:hidden">合計</th>
                                    <td class="text-end hidden md:table-cell">
                                        {{ $totalIncome != 0 ? number_format($totalIncome) : '' }}</td>
                                    <td class="text-end md:hidden">
                                        {{ number_format($totalIncome - $totalExpense) ?? '' }}</td>
                                    <td class="text-end hidden md:table-cell">
                                        {{ $totalExpense != 0 ? number_format($totalExpense) : '' }}</td>
                                    <td class="text-end">{{ $balance != 0 ? number_format($balance) : '' }}</td>
                                    @if (!$thisMonthCloseFlg)
                                        <td></td>
                                    @endif
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
