<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $user_name }} さん
        </h2>
    </x-slot>
    <div
        class="relative min-h-screen flex flex-col items-center justify-start selection:bg-[#FF2D20] selection:text-white mt-5">
        <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">

            <main>
                <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
                    <div
                    class="border border-dark flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 lg:pb-10 ">
                    <div class="pt-3 sm:pt-5">
                        <h2 class="text-xl font-semibold text-black mb-4">お知らせ</h2>
                        @livewire('dashboard.announce')
                    </div>
                </div>

                    <div
                        class="border border-dark flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300  lg:p-10 lg:pb-10 ">
                        <h2 class="text-xl font-semibold text-black">実績</h2>
                        @livewire('dashboard.summary')
                    </div>

                    <div
                        class="border border-dark flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 lg:pb-10 ">
                        <div class="pt-3 sm:pt-5">
                            <h2 class="text-xl font-semibold text-black mb-4">使用方法</h2>
                            <p class="mt-4 text-sm/relaxed">
                                詳しい使用方法はこちらです。<br>
                                <a href="{{ route('document') }}" wire:navigate>
                                    <x-primary-button class="mt-3">詳しい操作方法を見る</x-primary-button>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
<div>
