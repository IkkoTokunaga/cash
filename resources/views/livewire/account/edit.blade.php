<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List Transaction') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form wire:submit="save">
                <ul>
                    <li>
                        <label for="date">日付</label>
                    </li>
                    <li>
                        <input type="date" id="date" wire:model="date">
                        <div>
                            @error('date')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>
                    </li>
                    <li class="mt-3">
                        <label for="account_id">科目</label>
                    </li>
                    <li>
                        <select id="account_id" wire:model="account_id">
                            <option value="">選択してください</option>
                            @foreach ($accounts as $account)
                                <option value="{{ $account->id }}">{{ $account->name }}</option>
                            @endforeach
                        </select>
                        <div>
                            @error('daaccount_idte')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </li>
                    <li class="mt-3">
                        <label for="description">摘要</label>
                    </li>
                    <li>
                        <input type="text" id="description" wire:model="description">
                        <div>
                            @error('description')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </li>
                    <li class="mt-3">
                        <label>収支タイプ</label>
                    </li>
                    <li>
                        @foreach ($payment_type_list as $payment_type => $label)
                            <label for="{{ $payment_type }}">{{ $label }}
                            <input type="radio" id="{{ $payment_type }}" value="{{ $payment_type }}"
                                name="payment_type" class="me-3" wire:model="selected_payment_type"></label>
                        @endforeach
                        <div>
                            @error('payment_type')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </li>
                    <li class="mt-3">
                        <label for="payment">金額 / 円</label>
                    </li>
                    <li>
                        <input type="number" id="payment" wire:model="payment">
                        <div>
                            @error('payment')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </li>
                    <li class="mt-3">
                        <button type="submit" class="btn btn-danger btn-lg me-2">保存</button>
                        <button type="button" wire:click="goBack" class="btn btn-info btn-lg">一覧へ戻る</button>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>
