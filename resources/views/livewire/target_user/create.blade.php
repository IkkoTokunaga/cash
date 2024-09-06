<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('取引先情報 新規作成') }}
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
                                    <x-input-label for="name" :value="__('名前')" />
                                </th>
                                <td>
                                    <x-text-input wire:model="name" id="name" name="name" type="text"
                                        class="w-full mt-1 block shadow-none" />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </td>
                            </tr>
                            <tr>
                                <th class="table-success">
                                    <x-input-label for="kana" :value="__('名前(読み方)')" />
                                </th>
                                <td>
                                    <x-text-input wire:model="kana" id="kana" kana="kana" type="text"
                                        class="w-full mt-1 block shadow-none" />
                                    <x-input-error :messages="$errors->get('kana')" class="mt-2" />
                                </td>
                            </tr>
                            <tr>
                                <th class="table-success">
                                    <x-input-label for="tel" :value="__('電話番号')" />
                                </th>
                                <td>
                                    <x-text-input wire:model="tel" id="tel" tel="tel" type="tel"
                                        class="mt-1 block shadow-none" />
                                    <x-input-error :messages="$errors->get('tel')" class="mt-2" />
                                </td>
                            </tr>
                            <tr>
                                <th class="table-success">
                                    <x-input-label for="email" :value="__('Email')" />
                                </th>
                                <td>
                                    <x-text-input wire:model="email" id="email" name="email"
                                        type="text" class="w-full mt-1 block shadow-none" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </td>
                            </tr>
                                <th class="table-success">
                                    <x-input-label for="address" :value="__('住所')" />
                                </th>
                                <td>
                                    <x-text-input wire:model="address" id="address" name="address" type="text"
                                        class="w-full mt-1 block shadow-none" />
                                    <x-input-error :messages="$errors->get('address')" class="mt-2" />
                                </td>
                            </tr>
                            </tr>
                                <th class="table-success">
                                    <x-input-label for="description" :value="__('備考')" />
                                </th>
                                <td>
                                    <textarea wire:model="description" name="description" id="description" rows="10" class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"></textarea>
                                    <x-input-error :messages="$errors->get('description')" class="mt-2" />
                                </td>
                            </tr>
                        </table>
                        <div class="flex justify-center items-center">
                            <x-primary-button class="me-5">{{ __('保存') }}</x-primary-button>
                            <a href="{{ route('target_user.show') }}"
                                wire:navigate><x-secondary-button>{{ __('一覧へ戻る') }}</x-secondary-button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
