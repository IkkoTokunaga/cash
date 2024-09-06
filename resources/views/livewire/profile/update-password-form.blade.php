<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;
use Livewire\Volt\Component;

new class extends Component {
    public string $current_password = '';
    public string $password = '';
    public string $password_confirmation = '';

    /**
     * Update the password for the currently authenticated user.
     */
    public function updatePassword(): void
    {
        try {
            $validated = $this->validate([
                'current_password' => ['required', 'string', 'current_password'],
                'password' => ['required', 'string', Password::defaults(), 'confirmed'],
            ]);
        } catch (ValidationException $e) {
            $this->reset('current_password', 'password', 'password_confirmation');

            throw $e;
        }

        Auth::user()->update([
            'password' => Hash::make($validated['password']),
        ]);

        $this->reset('current_password', 'password', 'password_confirmation');

        $this->dispatch('password-updated');
    }
}; ?>

<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('パスワード更新') }}
        </h2>
    </header>

    <form wire:submit="updatePassword" class="mt-6 space-y-6">
        <div>
            <table class="table table-bordered mt-2 ">
                <tr>
                    <th class="table-success">
                        <x-input-label for="update_password_current_password" :value="__('現在のパスワード')" /><x-required-label />
                    </th>
                    <td>
                        <x-text-input wire:model="current_password" id="update_password_current_password"
                            name="current_password" type="password" class="mt-1 block w-full shadow-none"
                            autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('current_password')" class="mt-2" />
                    </td>
                </tr>
                <tr>
                    <th class="table-success">
                        <x-input-label for="update_password_password" :value="__('新しいパスワード')" /><x-required-label />
                    </th>
                    <td>
                        <x-text-input wire:model="password" id="update_password_password" name="password"
                            type="password" class="mt-1 block w-full shadow-none" autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </td>
                </tr>
                <tr>
                    <th class="table-success">
                        <x-input-label for="update_password_password_confirmation" :value="__('確認')" /><x-required-label />
                    </th>
                    <td>
                        <x-text-input wire:model="password_confirmation" id="update_password_password_confirmation"
                        name="password_confirmation" type="password" class="mt-1 block w-full shadow-none" autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </td>
                </tr>
            </table>
        </div>

        <div>
        </div>

        <div>
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('更新') }}</x-primary-button>

            <x-action-message class="me-3" on="password-updated">
                {{ __('更新しました') }}
            </x-action-message>
        </div>
    </form>
</section>
