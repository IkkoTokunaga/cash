<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('問い合わせ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session()->has('saved_message'))
                @if (session('saved_support_id'))
                    <div class="alert alert-info">{{ session('saved_message') }} </div>
                @else
                    <div class="alert alert-danger">{{ session('saved_message') }} </div>
                @endif
            @endif
        </div>
    </div>
</div>
