<?php
$index = 0;
$contents = [
    ['title' => '勘定科目登録', 'id' => 'acount_create', 'template' => 'document.acount_create', 'index' => ++$index],
    ['title' => '勘定科目修正', 'id' => 'acount_edit', 'template' => 'document.acount_edit', 'index' => ++$index],
    ['title' => '勘定科目削除', 'id' => 'acount_delete', 'template' => 'document.acount_delete', 'index' => ++$index],
    ['title' => '取引先登録', 'id' => 'target_user_create', 'template' => 'document.target_user_create', 'index' => ++$index],
    // ['title' => '取引先修正', 'id' => 'target_user_edit', 'template' => 'document.target_user_edit', 'index' => ++$index],
    // ['title' => '取引先削除', 'id' => 'target_user_delete', 'template' => 'document.target_user_delete', 'index' => ++$index],
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

    <div class="sm:py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4 sm:p-8 bg-white sm:rounded-lg border">
                <div class="max-w-full">

                    <main class="mt-6">
                        <div class="">
                            <div class="mb-12">
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
                                <div class="mb-12" id="{{ $content['id'] }}">
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
    </div>
</body>

</html>
