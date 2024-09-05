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
<body class="antialiased font-sans">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('使用方法') }}
        </h2>
    </x-slot>

    <div class="bg-gray-50 text-black/50 ">
        {{-- <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" /> --}}
        <div
            class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">

                <main class="mt-6">
                    <div class="">
                        <div
                            class="border border-dark flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 md:row-span-3 lg:p-10 lg:pb-10 mb-3">
                            <p>画面のサンプルはPC版の画面となります。スマートフォンやタブレット端末ではレイアウトが少し異なりますが、基本的な使用方法としては大きな違いはありません。
                                <br>
                            スマートフォンは上部のナビバーが隠れている場合がございますので、メニュが見つからない場合は右上のボタンよりメニュを表示させてください。
                            </p>
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
