<?php
use Carbon\Carbon;
?>
<div>
    <x-slot name="header">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('取引先') }}
            </h2>
        </div>
    </x-slot>

    <div class="sm:py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4 sm:p-8 bg-white sm:rounded-lg border">
                <div class="max-w-full">
                    @if (session()->has('saved_message'))
                        @if (session('saved_target_user_id'))
                            <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4 mb-4"> {{ session('saved_message') }} </div>
                        @else
                            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4"> {{ session('saved_message') }} </div>
                        @endif
                    @endif
                    <a href="{{ route('target_user.create') }}" wire:navigate><x-secondary-button
                            class="mb-2">{{ __('新規取引先作成') }}</x-secondary-button>
                    </a>

                    <table class="min-w-full border-collapse table-auto mt-2">
                        <thead class="bg-gray-200">
                            <tr>
                                <th class="text-center border border-gray-300">No.</th>
                                <th class="text-center border border-gray-300">名前</th>
                                <th class="text-center border border-gray-300">情報</th>
                                <th class="text-center border border-gray-300 hidden md:table-cell">備考</th>
                                <th class="text-center border border-gray-300"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($targetUsers as $targetUser)
                                <tr @if (session('saved_target_user_id') === $targetUser->code && session('saved_target_user_id')) class="bg-blue-100 border-l-4 border-blue-500 text-blue-700" @endif
                                    style="cursor: pointer;">
                                    <td class="text-center border border-gray-300" wire:click="edit({{ $targetUser->code }})">
                                        {{ $targetUser->code }}</td>
                                    <td class="text-center border border-gray-300" wire:click="edit({{ $targetUser->code }})">
                                        {{ $targetUser->name }}
                                        @if ($targetUser->kana)
                                            <br> ({{ $targetUser->kana }})
                                        @endif
                                    </td>
                                    <td class="text-center border border-gray-300" wire:click="edit({{ $targetUser->code }})">
                                        @if ($targetUser->tel)
                                            【 TEL 】 {{ $targetUser->tel }} <br>
                                        @endif
                                        @if ($targetUser->email)
                                            【Email】 {{ $targetUser->email }} <br>
                                        @endif
                                        @if ($targetUser->address)
                                            【 住所 】 {{ $targetUser->address }} <br>
                                        @endif
                                        @if ($targetUser->description)
                                            <span class="text-end md:hidden">
                                                【 備考 】 {{ $targetUser->description }}
                                            </span>
                                        @endif
                                    </td>
                                    <td wire:click="edit({{ $targetUser->code }})" class="border border-gray-300 hidden md:table-cell">
                                        {{ $targetUser->description }}</td>
                                    <td class="border border-gray-300">
                                        <div class="flex justify-center">
                                            {{-- <div wire:click="edit({{ $targetUser->code }})" style="cursor: pointer;">
                                                <img src="{{ asset('storage/edit_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                                    alt="">
                                            </div> --}}
                                            <div wire:click="delete({{ $targetUser->code }})"
                                                wire:confirm="削除したデータは元に戻せません。よろしいですか?"><img
                                                    src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                                    alt="" class="min-w-[30px]"></div>
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
