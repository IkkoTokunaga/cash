<div>
    <div class="w-full">
        @if (session()->has('saved_message'))
            @if (session('saved_support_id'))
                <div class="alert alert-info">
                @else
                    <div class="alert alert-danger">
            @endif
            {{ session('saved_message') }}
    </div>
    @endif
</div>
<form wire:submit="save">
    <x-input-label for="name" :value="__('お名前')" />
    <x-text-input wire:model="name" id="name" name="name" type="text" class="w-75 shadow-none" />
    <x-input-error :messages="$errors->get('name')" class="mt-2" />
    <x-input-label for="email" :value="__('Email')" />
    <x-text-input wire:model="email" id="email" name="email" type="email" class="w-75 shadow-none" />
    <x-input-error :messages="$errors->get('name')" class="mt-2" />
    <x-input-label :value="__('内容')" />
    <textarea name="content" class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md"
        rows="6" wire:model="content"></textarea>
    <x-input-error :messages="$errors->get('content')" class="mt-2" />
    <x-primary-button>{{ __('問い合わせる') }}</x-primary-button>

    <p class="mt-3">
        本システムをベースとした、追加開発の受注も受け付けております。<br>
        こちらは有償とはなりますが、個別の機能や項目を追加することができるフルオーダーなシステムとなっております。<br>
        詳しくはお問合せからお願いいたします。<br>
        ※エンジニアのスケジュールの関係でお受けできない、または納期がお約束できない場合がございます。
    </p>
</form>
</div>
