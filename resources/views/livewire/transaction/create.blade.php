<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('新規作成') }}
        </h2>
    </x-slot>

    <div class="sm:py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white sm:rounded-lg border">
                <div class=" max-w-xl">
                    <form wire:submit="save">
                        <p>各項目を入力して保存ボタンを押してください。<x-required-label />は必須項目です。</p>
                        <table class="table table-bordered mt-2 ">
                            <tr>
                                <th class="table-success">
                                    <x-input-label for="date" :value="__('日付')" /><x-required-label />
                                </th>
                                <td>
                                    <x-text-input wire:model="date" id="date" name="date" type="date"
                                        class="mt-1 block shadow-none" />
                                    <x-input-error :messages="$errors->get('date')" class="mt-2" />
                                </td>
                            </tr>
                            <tr>
                                <th class="table-success">
                                    <x-input-label for="account_id" :value="__('科目')" /><x-required-label />
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
                                    <x-input-label for="target_user_id" :value="__('取引先')" />
                                </th>
                                <td>
                                    <div class="flex justify-start items-center">
                                        <x-text-input wire:model="target_user_id" id="date" name="date"
                                            type="text" class="me-1 block shadow-none w-[60px]" />
                                        <select id="target_user_id" wire:model="target_user_id"
                                            class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md">
                                            <option value="">選択してください</option>
                                            @foreach ($targetUsers as $targetUser)
                                                <option value="{{ $targetUser->code }}">{{ $targetUser->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <x-input-error :messages="$errors->get('target_user_id')" class="mt-2" />
                                </td>
                            </tr>
                            <tr>
                                <th class="table-success">
                                    <x-input-label for="description" :value="__('摘要')" /><x-required-label />
                                </th>
                                <td>
                                    <x-text-input wire:model="description" id="description" name="description"
                                        type="text" class="w-full mt-1 block shadow-none" />
                                    <x-input-error :messages="$errors->get('description')" class="mt-2" />
                                </td>
                            </tr>
                            <tr>
                                <th class="table-success">
                                    <x-input-label :value="__('収支タイプ')" /><x-required-label />
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
                                    <x-input-label for="payment" :value="__('金額 / 円')" /><x-required-label />
                                </th>
                                <td>
                                    <x-text-input wire:model="payment" id="payment" name="payment" type="number"
                                        class="w-full mt-1 block shadow-none" />
                                    <x-input-error :messages="$errors->get('payment')" class="mt-2" />
                                </td>
                            </tr>
                        </table>
                        <div class="flex justify-center items-center">
                            <x-primary-button>{{ __('保存') }}</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
