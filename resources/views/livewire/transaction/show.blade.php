<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List Transaction') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="row mt-2">
                <div class="col">
                    <a href="{{ route('transaction.show', $prevMonth_Ym) }}" class="btn btn-primary">◁前月</a>
                </div>
                <div class="col">
                    <a href="{{ route('transaction.show', $nextMonth_Ym) }}" class="btn btn-primary">次月▷</a>
                </div>
                <div class="col-9">

                </div>
            </div>
            <table class="table table-bordered mt-2">
                <thead class="table-success">
                    <tr>
                        <th class="text-center">日付</th>
                        <th class="text-center">科目</th>
                        <th class="text-center">摘要</th>
                        <th class="text-center">収入 / 円</th>
                        <th class="text-center">支出 / 円</th>
                        <th class="text-center">残高 / 円</th>
                        <th class="text-center"></th>
                    </tr>
                </thead>
                <tbody>
                    @if ($prevMonthData)
                        <tr>
                            <td class="text-center">{{ $prevEndOfMonth_Ymd }}</td>
                            <td></td>
                            <td class="text-primary">前月繰越金</td>
                            <td></td>
                            <td></td>
                            <td class="text-end">{{ number_format($prevMonthData->amount) }}</td>
                            <td></td>
                        </tr>
                    @else
                        <tr>
                            <td class="text-center">{{ $prevEndOfMonth_Ymd }}</td>
                            <td></td>
                            <td>
                                ❕前月残高が確定されていません<br>
                                <button type="submit" wire:click="endOfMonthConfirmation('{{ $prevEndOfMonth_Ymd }}')"
                                    class="btn btn-danger btn-lg">前月残高確定</button>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    @endif
                    @foreach ($transactions as $transaction)
                        <tr>
                            <td class="text-center">{{ $transaction->date }}</td>
                            <td>{{ $transaction->account_name }}</td>
                            <td>{{ $transaction->description }}</td>
                            <td class="text-end">
                                {{ $transaction->income != 0 ? number_format($transaction->income) : '' }}
                            </td>
                            <td class="text-end">
                                {{ $transaction->expense != 0 ? number_format($transaction->expense) : '' }}
                            </td>
                            <td class="text-end">{{ number_format($transaction->balance) }}</td>
                            <td>
                                <div class="d-flex justify-content-around">
                                    <a href="/transaction/edit/{{ $transaction->id }}" wire:navigate style="cursor: pointer;"><img
                                            src="{{ asset('storage/edit_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                            alt=""></a>
                                    <div wire:click="delete({{ $transaction->id }})"
                                        wire:confirm="Are you sure you want to delete this one?"
                                        style="cursor: pointer;"><img
                                            src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                            alt=""></div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    @if (count($transactions))
                        <tr>
                            <th colspan="3" class="table-success">合計</th>
                            <td class="text-end">{{ $totalIncome != 0 ? number_format($totalIncome) : '' }}
                            </td>
                            <td class="text-end">{{ $totalExpense != 0 ? number_format($totalExpense) : '' }}
                            </td>
                            <td class="text-end">{{ $totalExpense != 0 ? number_format($balance) : '' }}</td>
                            <td></td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
