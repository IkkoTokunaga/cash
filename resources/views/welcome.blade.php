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
                        <h1 class="fs-2 fw-bold text-dark">{{ env('APP_NAME') }}</h1>
                    </div>
                    @if (Route::has('login'))
                        <livewire:welcome.navigation />
                    @endif
                </header>

                <main class="mt-6">
                    <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
                        <div
                            class="border border-dark flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 md:row-span-3 lg:p-10 lg:pb-10 ">
                            <h2 class="text-xl font-semibold text-black">コンセプト</h2>
                            <p>シンプルでわかりやすいデザイン、完全無料の収支管理アプリです。<br>フリーランス・法人様におすすめ。もちろん家計用、個人用にもお使いいただけます。</p>
                            <p>※収支一覧画面</p>
                            <div id="screenshot-container" class="relative flex w-full flex-1 items-stretch">
                                <img src="{{ asset('storage/cash-tool-sample.png') }}"
                                    alt="Laravel documentation screenshot"
                                    class="border border-secndary aspect-video h-full w-full flex-1 rounded-[10px] object-top shadow-[0px_4px_34px_rgba(0,0,0,0.06)] "
                                    onerror="
                                            document.getElementById('screenshot-container').classList.add('!hidden');
                                            document.getElementById('docs-card').classList.add('!row-span-1');
                                            document.getElementById('docs-card-content').classList.add('!flex-row');
                                            document.getElementById('background').classList.add('!hidden');
                                        " />

                            </div>
                            <ul>
                                <li>使用例</li>
                                <li>・ 個人事業主様の出納帳</li>
                                <li>・ 法人様の出納帳</li>
                                <li>・ 家計簿</li>
                                <li>・ おこずかい帳</li>
                                <li></li>
                            </ul>

                            <div class="relative flex items-center gap-6 lg:items-end">
                                <div id="docs-card-content" class="flex items-start gap-6 lg:flex-col">

                                    <div class="pt-3 sm:pt-5 lg:pt-0">
                                        <h2 class="text-xl font-semibold text-black">ご利用までの流れ</h2>

                                        <p class="mt-4 text-sm/relaxed">
                                            1. アカウントの新規作成を行います。<br>
                                            2. どのような収支の項目が存在するかの洗い出しを行い、<strong>科目マスタ</strong>設定します。<br>
                                            3. 作成メニュから収支の登録を行います。<br>
                                            4. 一覧で現在の月の収支を確認できます。<br>
                                            5. どうしてもわからないことは問合メニュへ<br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div
                            class="border border-dark flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 lg:pb-10 ">
                            <div class="pt-3 sm:pt-5">
                                <h2 class="text-xl font-semibold text-black">使い方</h2>

                                <p class="mt-4 text-sm/relaxed">
                                    誰にでもわかりやすく、簡潔な操作ができるように設計されています。<br>
                                    <x-primary-button class="mt-3">詳しい操作方法を見る</x-primary-button>
                                </p>
                            </div>
                        </div>

                        <div
                            class="border border-dark flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300  lg:pb-10">
                            <div class="pt-3 sm:pt-5">
                                <h2 class="text-xl font-semibold text-black">問い合わせ</h2>

                                <p class="mt-4 text-sm/relaxed">
                                    もっと詳細に知りたい場合はこちら

                                </p>
                                <livewire:support.guest />
                            </div>
                        </div>
                    </div>
                </main>

                <footer class="py-16 text-center text-sm text-black">

                </footer>
            </div>
        </div>
    </div>
</body>

</html>
