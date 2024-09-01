<?php
use Carbon\Carbon;
?>
<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('取引先') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4 sm:p-8 bg-white sm:rounded-lg border">
                <div class="max-w-full">
                    @if (session()->has('saved_message'))
                        @if (session('saved_target_user_id'))
                            <div class="alert alert-info"> {{ session('saved_message') }} </div>
                        @else
                            <div class="alert alert-danger"> {{ session('saved_message') }} </div>
                        @endif
                    @endif
                    <a href="{{ route('target_user.create') }}" wire:navigate><x-secondary-button
                            class="mb-2">{{ __('新規取引先作成') }}</x-secondary-button>
                    </a>

                    <table class="table table-bordered mt-2">
                        <thead class="table-success">
                            <tr>
                                <th class="text-center">No.</th>
                                <th class="text-center">名前</th>
                                <th class="text-center">情報</th>
                                <th class="text-center hidden md:table-cell">備考</th>
                                <th class="text-center"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($targetUsers as $targetUser)
                                <tr @if (session('saved_target_user_id') === $targetUser->code && session('saved_target_user_id')) class="table-info" @endif style="cursor: pointer;">
                                    <td class="text-center" wire:click="edit({{ $targetUser->code }})">{{ $targetUser->code }}</td>
                                    <td wire:click="edit({{ $targetUser->code }})">
                                        {{ $targetUser->name }}
                                        @if ($targetUser->kana)
                                            <br> ({{ $targetUser->kana }})
                                        @endif
                                    </td>
                                    <td wire:click="edit({{ $targetUser->code }})">
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
                                    <td wire:click="edit({{ $targetUser->code }})" class="hidden md:table-cell">{{ $targetUser->description }}</td>
                                    <td>
                                        <div class="d-flex justify-content-around">
                                            {{-- <div wire:click="edit({{ $targetUser->code }})" style="cursor: pointer;">
                                                <img src="{{ asset('storage/edit_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                                    alt="">
                                            </div> --}}
                                            <div wire:click="delete({{ $targetUser->code }})"
                                                wire:confirm="削除したデータは元に戻せません。よろしいですか?"><img
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
