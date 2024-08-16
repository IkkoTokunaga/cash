@php
use Carbon\Carbon;
@endphp
<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('編集') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="row ">
                <div class="col">
                    <form wire:submit="save">
                        <table class="table table-bordered mt-2 ">
                            <tr>
                                <th class="table-success">
                                    <x-input-label for="date" :value="__('日付')" />
                                </th>
                                <td>
                                    <x-text-input wire:model="date" id="date" name="date" type="date"
                                        class="mt-1 block shadow-none" />
                                    <x-input-error :messages="$errors->get('date')" class="mt-2" />
                                </td>
                            </tr>
                            <tr>
                                <th class="table-success">
                                    <x-input-label for="account_id" :value="__('科目')" />
                                </th>
                                <td>
                                    <select id="account_id" wire:model="account_id"
                                        class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md">
                                        <option value="">選択してください</option>
                                        @foreach ($accounts as $account)
                                            <option value="{{ $account->code }}">{{ $account->name }}</option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('account_id')" class="mt-2" />
                                    </td>
                            </tr>
                            <tr>
                                <th class="table-success">
                                    <x-input-label for="description" :value="__('摘要')" />
                                </th>
                                <td>
                                    <x-text-input wire:model="description" id="description" name="description"
                                        type="text" class="w-full mt-1 block shadow-none" />
                                    <x-input-error :messages="$errors->get('description')" class="mt-2" />
                                </td>
                            </tr>
                            <tr>
                                <th class="table-success">
                                    <x-input-label :value="__('収支タイプ')" />
                                </th>
                                <td>
                                    @foreach ($payment_type_list as $payment_type => $label)
                                        <label for="{{ $payment_type }}">{{ $label }}
                                            <input type="radio" id="{{ $payment_type }}" value="{{ $payment_type }}"
                                                name="payment_type" class="me-3"
                                                wire:model="selected_payment_type"></label>
                                    @endforeach
                                    <x-input-error :messages="$errors->get('selected_payment_type')" class="mt-2" />
                                </td>
                            </tr>
                            <tr>
                                <th class="table-success">
                                    <x-input-label for="payment" :value="__('金額 / 円')" />
                                </th>
                                <td>
                                    <x-text-input wire:model="payment" id="payment" name="payment"
                                        type="number" class="w-full mt-1 block shadow-none" />
                                    <x-input-error :messages="$errors->get('payment')" class="mt-2" />
                                </td>
                            </tr>
                        </table>
                        <x-primary-button>{{ __('保存') }}</x-primary-button>
                        <a href="{{ route('transaction.show', Carbon::parse($date)->format('Y-m')) }}" wire:navigate><x-secondary-button>{{ __('一覧へ戻る') }}</x-secondary-button></a>
                    </div>
                    <div class="col-12 col-sm-2 col-md-4 col-lg-6">
                    </div>

            </form>
        </div>
    </div>
</div>
