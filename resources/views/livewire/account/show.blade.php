<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('勘定科目') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white sm:rounded-lg border">
                <div class=" max-w-xl">
                    @if (session()->has('saved_message'))
                        @if (session('saved_account_id'))
                            <div class="alert alert-info"> {{ session('saved_message') }} </div>
                        @else
                            <div class="alert alert-danger"> {{ session('saved_message') }} </div>
                        @endif
                        <div> {{ session('saved_message') }} </div>
                    @endif

                    <form wire:submit="save">

                        <x-input-label for="account_name" :value="__('科目名を入力して、作成ボタンを押してください。')" />
                        <x-text-input wire:model="account_name" id="account_name" type="text"
                            class="mt-1 mb-2 w-50 block shadow-none" />
                        <x-input-error class="mt-2" :messages="$errors->get('account_name')" />
                        <input type="hidden" id="account_id" wire:model="account_id">
                        <x-primary-button>{{ __('作成') }}</x-primary-button>
                    </form>
                    <div class="row ">
                        <div class="col">
                            <table class="table table-bordered mt-2">
                                <thead class="table-success">
                                    <tr>
                                        <th class="text-center">科目名</th>
                                        <th class="text-center"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($accounts as $account)
                                        <tr @if (session('saved_account_id') === $account->code && session('saved_account_id')) class="table-info" @endif>
                                            <td>{{ $account->name }}</td>
                                            <td>
                                                <div class="d-flex justify-content-around">
                                                    <div wire:click="edit({{ $account->code }})"
                                                        style="cursor: pointer;"><img
                                                            src="{{ asset('storage/edit_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                                            alt=""></div>
                                                    <div wire:click="delete({{ $account->code }})"
                                                        wire:confirm="削除したデータは元に戻せません。よろしいですか?"
                                                        style="cursor: pointer;"><img
                                                            src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                                            alt=""></div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
