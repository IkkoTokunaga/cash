<?php
use Carbon\Carbon;
?>
<div>
    <x-slot name="header">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('収支一覧') }}
            </h2>
        </div>
    </x-slot>

    <div class="sm:py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4 sm:p-8 bg-white sm:rounded-lg border">
                <div class="max-w-full">
                    @if (session()->has('saved_message'))
                        @if (session('saved_transaction_id'))
                            <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4 mb-4"> {{ session('saved_message') }} </div>
                        @elseif (session('saved_summary') === true)
                            <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4 mb-4"> {{ session('saved_message') }} </div>
                        @else
                            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4"> {{ session('saved_message') }} </div>
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
                    <p>行を選択することでで編集画面へ移動できます。</caption>
                    <table class="min-w-full border-collapse table-auto mt-2">
                        <thead class="bg-gray-200">
                            <tr>
                                <th class="text-center border border-gray-300">日付</th>
                                <th class="text-center border border-gray-300 hidden md:table-cell">科目</th>
                                <th class="text-center border border-gray-300 hidden md:table-cell">取引先</th>
                                <th class="text-center border border-gray-300">摘要</th>
                                <th class="text-center border border-gray-300 hidden md:table-cell">収入 (円)</th>
                                <th class="text-center border border-gray-300 table-cell md:hidden">金額 (円)</th>
                                <th class="text-center border border-gray-300 hidden md:table-cell">支出 (円)</th>
                                <th class="text-center border border-gray-300">残高 (円)</th>
                                @if (!$thisMonthCloseFlg)
                                    <th class="text-center border border-gray-300"></th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @if ($prevMonthData)
                                <tr @if (session('saved_summary') === true) class="bg-blue-100 border-l-4 border-blue-500 text-blue-700" @endif>
                                    <td class="text-center border border-gray-300">
                                        {{ Carbon::parse($prevEndOfMonth_Ymd)->format('n/j') }}</td>
                                    <td colspan="5" class="text-primary hidden md:table-cell border border-gray-300">
                                        前月繰越金</td>
                                    <td colspan="2" class="text-primary md:hidden border border-gray-300">前月繰越金</td>
                                    <td class="text-end border border-gray-300">
                                        {{ number_format($prevMonthData->amount) }}</td>
                                    @if (!$thisMonthCloseFlg)
                                        <td class="border border-gray-300"></td>
                                    @endif
                                </tr>
                            @else
                                <tr>
                                    <td class="text-center border border-gray-300">
                                        {{ Carbon::parse($prevEndOfMonth_Ymd)->format('n/j') }}</td>
                                    <td colspan="5" class="hidden md:table-cell border border-gray-300">
                                        ❕前月残高が確定されていません<br>
                                        <x-danger-button
                                            wire:click="endOfMonthConfirmation('{{ $prevEndOfMonth_Ymd }}')"
                                            wire:confirm="前月の締め処理を実行します。この処理を行うと前月のデータが確定し、修正ができなくなります。\n実行してもよろしいですか？">
                                            前月残高確定
                                        </x-danger-button>
                                        <x-input-error :messages="$errors->get('endOfMonth_Ymd')" class="mt-2" />
                                    </td>
                                    <td colspan="2" class="md:hidden border border-gray-300">
                                        ❕前月残高が確定されていません<br>
                                        <x-danger-button
                                            wire:click="endOfMonthConfirmation('{{ $prevEndOfMonth_Ymd }}')"
                                            wire:confirm="前月の締め処理を実行します。この処理を行うと前月のデータが確定し、修正ができなくなります。\n実行してもよろしいですか？">
                                            前月残高確定
                                        </x-danger-button>
                                        <x-input-error :messages="$errors->get('endOfMonth_Ymd')" class="mt-2" />
                                    </td>
                                    <td class="border border-gray-300"></td>
                                    @if (!$thisMonthCloseFlg)
                                        <td class="border border-gray-300"></td>
                                    @endif
                                </tr>
                            @endif
                            @foreach ($transactions as $transaction)
                                <tr @if (session('saved_transaction_id') === $transaction->id && session('saved_transaction_id')) class="bg-blue-100 border-l-4 border-blue-500 text-blue-700" @endif
                                    style="cursor: pointer;">
                                    <td class="text-center border border-gray-300"
                                        wire:click="edit({{ $transaction->id }})">
                                        {{ $transaction->date }}
                                    </td>
                                    <td wire:click="edit({{ $transaction->id }})"
                                        class="hidden md:table-cell border border-gray-300">
                                        {{ $transaction->account_name }}
                                    </td>
                                    <td wire:click="edit({{ $transaction->id }})"
                                        class="hidden md:table-cell border border-gray-300">
                                        {{ $transaction->target_user_name }}
                                    </td>
                                    <td wire:click="edit({{ $transaction->id }})" class="border border-gray-300">
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
                                    <td class="text-end border border-gray-300"
                                        wire:click="edit({{ $transaction->id }})">
                                        {{ $transaction->income != 0 ? number_format($transaction->income) : '' }}
                                        <span class="md:hidden">
                                            {{ $transaction->expense != 0 ? '-' . number_format($transaction->expense) : '' }}
                                        </span>
                                    </td>
                                    <td class="text-end hidden md:table-cell border border-gray-300"
                                        wire:click="edit({{ $transaction->id }})">
                                        {{ $transaction->expense != 0 ? number_format($transaction->expense) : '' }}
                                    </td>
                                    <td class="text-end border border-gray-300"
                                        wire:click="edit({{ $transaction->id }})">
                                        {{ number_format($transaction->balance) }}</td>
                                    @if (!$thisMonthCloseFlg)
                                        <td class="border border-gray-300">
                                            <div class="flex justify-center">
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
                                    <th colspan="4" class="border border-gray-300 bg-gray-200 hidden md:table-cell">
                                        合計</th>
                                    <th colspan="2" class="border border-gray-300 bg-gray-200 md:hidden">合計</th>
                                    <td class="text-end hidden md:table-cell border border-gray-300">
                                        {{ $totalIncome != 0 ? number_format($totalIncome) : '' }}</td>
                                    <td class="text-end md:hidden border border-gray-300">
                                        {{ number_format($totalIncome - $totalExpense) ?? '' }}</td>
                                    <td class="text-end hidden md:table-cell border border-gray-300">
                                        {{ $totalExpense != 0 ? number_format($totalExpense) : '' }}</td>
                                    <td class="text-end border border-gray-300">
                                        {{ $balance != 0 ? number_format($balance) : '' }}</td>
                                    @if (!$thisMonthCloseFlg)
                                        <td class="border border-gray-300"></td>
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
