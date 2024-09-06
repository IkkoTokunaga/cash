<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('問い合わせ') }}
        </h2>
    </x-slot>

    <div class="sm:py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white sm:rounded-lg border">
                <div class=" max-w-xl">
                    <form wire:submit="save">
                        <p>各項目を入力して問い合わせるボタンを押してください。</p>
                        <table class="table table-bordered mt-2 ">
                            <tr>
                                <th class="table-success">
                                    <x-input-label for="name" :value="__('お名前')" />
                                </th>
                                <td>
                                    <x-text-input wire:model="name" id="name" name="name" type="text"
                                        class="w-full mt-1 block shadow-none" />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </td>
                            </tr>
                            <tr>
                                <th class="table-success">
                                    <x-input-label for="name" :value="__('Email')" />
                                </th>
                                <td>
                                    <x-text-input wire:model="email" id="email" name="email" type="text"
                                        class="w-full mt-1 block shadow-none" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </td>
                            </tr>
                            <tr>
                                <th class="table-success">
                                    <x-input-label :value="__('内容')" />
                                </th>
                                <td>
                                    <div>
                                        <textarea name="content" class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md"
                                            rows="6" wire:model="content"></textarea>
                                        <x-input-error :messages="$errors->get('content')" class="mt-2" />
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <div class="flex justify-center items-center">
                            <x-primary-button>{{ __('問い合わせる') }}</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
