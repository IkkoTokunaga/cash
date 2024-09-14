<div>
    <x-slot name="header">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('問い合わせ') }}
            </h2>
        </div>
    </x-slot>

    <div class="sm:py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session()->has('saved_message'))
                @if (session('saved_support_id'))
                    <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4 mb-4">{{ session('saved_message') }} </div>
                @else
                    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4">{{ session('saved_message') }} </div>
                @endif
            @endif
        </div>
    </div>
</div>
