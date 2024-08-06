<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Transaction') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="row ">
                <div class="col">
                    <form wire:submit="save">
                        <table class="table table-bordered mt-2 ">
                            <tr>
                                <th class="table-success"><label for="date">日付</label></th>
                                <td>
                                    <input type="date" id="date" wire:model="date">
                                    <div>
                                        @error('date')
                                            <p class="error">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="table-success"><label for="account_id">科目</label></th>
                                <td>
                                    <select id="account_id" wire:model="account_id" class="w-75">
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
                                </td>
                            </tr>
                            <tr>
                                <th class="table-success"><label for="description">摘要</label></th>
                                <td>
                                    <input type="text" id="description" class="w-100" wire:model="description">
                                    <div>
                                        @error('description')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="table-success"><label>収支タイプ</label></th>
                                <td>
                                    @foreach ($payment_type_list as $payment_type => $label)
                                        <label for="{{ $payment_type }}">{{ $label }}
                                            <input type="radio" id="{{ $payment_type }}" value="{{ $payment_type }}"
                                                name="payment_type" class="me-3"
                                                wire:model="selected_payment_type"></label>
                                    @endforeach
                                    <div>
                                        @error('payment_type')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="table-success"><label for="payment">金額 / 円</label></th>
                                <td>
                                    <div>
                                        <input type="number" id="payment" wire:model="payment">
                                        @error('payment')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                        </table>

                        <button type="submit" class="btn btn-danger btn-lg mt-3">保存</button>
                    </form>
                </div>
                <div class="col-12 col-sm-2 col-md-4 col-lg-6">
                </div>
            </div>
        </div>
    </div>
</div>
