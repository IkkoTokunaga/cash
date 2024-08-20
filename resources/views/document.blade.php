<?php
$index = 0;
$contents = [
    ['title' => '科目マスタ登録', 'id' => 'acount_create', 'template' => 'document.acount_create', 'index' => ++$index],
    ['title' => '科目マスタ修正', 'id' => 'acount_edit', 'template' => 'document.acount_edit', 'index' => ++$index],
    ['title' => '科目マスタ削除', 'id' => 'acount_delete', 'template' => 'document.acount_delete', 'index' => ++$index],
    ['title' => '収支登録', 'id' => 'transaction_crete', 'template' => 'document.transaction_create', 'index' => ++$index],
    ['title' => '収支一覧確認(前月残高確定)', 'id' => 'transaction_list', 'template' => 'document.transaction_list', 'index' => ++$index],
    ['title' => '収支詳細修正', 'id' => 'transaction_edit', 'template' => 'document.transaction_edit', 'index' => ++$index],
    ['title' => '収支詳細削除', 'id' => 'transaction_delete', 'template' => 'document.transaction_delete', 'index' => ++$index],
    ['title' => '使用方法を見てもわからない場合は以下よりお問い合わせください', 'id' => 'support_create', 'template' => 'support.guest', 'index' => ++$index],
];

?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased font-sans">
    <div class="bg-gray-50 text-black/50 ">
        {{-- <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" /> --}}
        <div
            class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                    <div class="flex lg:justify-center lg:col-start-2">
                        <h1 class="fs-2 fw-bold text-dark">使用方法</h1>
                    </div>
                    @if (Route::has('login'))
                        <livewire:welcome.navigation />
                    @endif
                </header>

                <main class="mt-6">
                    <div class="">
                        <div
                            class="border border-dark flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 md:row-span-3 lg:p-10 lg:pb-10 mb-3">
                            <h2 class="text-xl font-semibold text-black">目次</h2>
                            <ul>
                                @foreach ($contents as $content)
                                    <li><a href="#{{ $content['id'] }}">{{ $content['index'] }}.
                                            {{ $content['title'] }}</a></li>
                                @endforeach
                            </ul>
                        </div>

                        @foreach ($contents as $content)
                            <div
                                class="border border-dark flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 md:row-span-3 lg:p-10 lg:pb-10 mb-3"
                                    id="{{ $content['id'] }}"
                                >
                                <h2 class="text-xl font-semibold text-black">{{ $content['title'] }}</h2>
                                @livewire($content['template'])
                            </div>
                        @endforeach

                    </div>
                </main>

                <footer class="py-16 text-center text-sm text-black">

                </footer>
            </div>
        </div>
    </div>
</body>

</html>
