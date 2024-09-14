<div>
    <x-slot name="header">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('勘定科目') }}
            </h2>
        </div>
    </x-slot>

    <div class="sm:py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white sm:rounded-lg border">
                <div class=" max-w-xl">
                    @if (session()->has('saved_message'))
                        @if (session('saved_account_id'))
                            <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4 mb-4"> {{ session('saved_message') }} </div>
                        @else
                            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4"> {{ session('saved_message') }} </div>
                        @endif
                    @endif

                    <form wire:submit="save">
                        <x-input-label for="account_name" :value="__('科目名を入力して、作成ボタンを押してください。')" />
                        <x-text-input wire:model="account_name" id="account_name"
                            class="mt-1 mb-2 w-50 block shadow-none" />
                        <x-input-error class="mt-2" :messages="$errors->get('account_name')" />
                        <input type="hidden" id="account_id" wire:model="account_id">
                        <x-primary-button>{{ $bottomText }}</x-primary-button>
                    </form>
                    <p>行を選択することでで上記作成ボタンが更新ボタンになり、修正を行えます。</caption>
                    <table class="min-w-full border-collapse table-auto mt-2">

                        <thead class="border border-gray-300 bg-gray-200">
                            <tr>
                                <th class="text-center border border-gray-300 bg-gray-200">科目名</th>
                                <th class="text-center border border-gray-300 bg-gray-200"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($accounts as $account)
                                <tr @if (session('saved_account_id') === $account->code && session('saved_account_id')) class="bg-blue-100 border-l-4 border-blue-500 text-blue-700" @endif
                                    style="cursor: pointer;">
                                    <td class="border border-gray-300" wire:click="edit({{ $account->code }})">{{ $account->name }}</td>
                                    <td class="border border-gray-300">
                                        <div class="flex justify-center">
                                            <div wire:click="delete({{ $account->code }})"
                                                wire:confirm="削除したデータは元に戻せません。よろしいですか?"><img
                                                    src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                                    alt="" class="min-w-[30px]">
                                            </div>
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
