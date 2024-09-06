<div>
    <p>上部ナビバーから一覧を選択し、以下の画面へ移動してください。</p>
    <p>初回ログイン時は以下のような画面となります。作成画面で保存を行うと一覧に収支が表示されます。</p>
    <p class="text-danger">※「前月残高確定」を押すと前月以前の収支について追加・修正ができなくなってしまうため、ご注意ください。（以下の図では2024年09月以前が変更できなくなります）</p>
    <div class=" mb-5">
        <div class="p-4 sm:p-8 bg-white sm:rounded-lg border">
            <div class="max-w-full">
                <div class="flex items-center">
                    <div class="me-5 sm:me-2"> <span
                            class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xl sm:text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
                            ◀ </span> </div>
                    <div class="me-5 sm:me-2">
                        <h2 class="font-semibold text-l text-gray-800 leading-tight py-2">2024年10月</h2>
                    </div>
                    <div> <span
                            class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xl sm:text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
                            ▶ </span> </div>
                </div>
                <table class="table table-bordered mt-2">
                    <caption align="top">行を選択することでで編集画面へ移動できます。</caption>
                    <thead class="table-success">
                        <tr>
                            <th class="text-center">日付</th>
                            <th class="text-center hidden md:table-cell">科目</th>
                            <th class="text-center hidden md:table-cell">取引先</th>
                            <th class="text-center">摘要</th>
                            <th class="text-center hidden md:table-cell">収入 (円)</th>
                            <th class="text-center table-cell md:hidden">金額 (円)</th>
                            <th class="text-center hidden md:table-cell">支出 (円)</th>
                            <th class="text-center">残高 (円)</th>
                            <th class="text-center"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">9/30</td>
                            <td colspan="5" class="hidden md:table-cell"> ❕前月残高が確定されていません<br> <x-danger-button>
                                    前月残高確定 </x-danger-button> </td>
                            <td colspan="2" class="md:hidden"> ❕前月残高が確定されていません<br> <x-danger-button> 前月残高確定
                                </x-danger-button> </td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <p>一覧画面の表示項目</p>
    <table class="table">
        <thead>
            <th>項目</th>
            <th>説明</th>
            <th>例</th>
        </thead>
        <tbody>
            <tr>
                <td>日付</td>
                <td>作成画面で登録した日付です。</td>
                <td>2024-08-20</td>
            </tr>
            <tr>
                <td>科目</td>
                <td>作成画面で選択した科目です。</td>
                <td>売上、仕入などの設定した項目名</td>
            </tr>
            <tr>
                <td>摘要</td>
                <td>作成画面で入力した適用です。</td>
                <td>仕入＿〇〇様＿10個</td>
            </tr>
            <tr>
                <td>収入 / 円</td>
                <td>収支タイプが収入の場合の金額です。</td>
                <td>10,000</td>
            </tr>
            <tr>
                <td>支出 / 円</td>
                <td>収支タイプが支出の場合の金額です。</td>
                <td>10,000</td>
            </tr>
            <tr>
                <td>残高 / 円</td>
                <td>現在までの収支の金額です。</td>
                <td>30,000(マイナス値もありえます）</td>
            </tr>
            <tr>
                <td><img src="{{ asset('storage/edit_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}" alt=""
                        class="d-inline-block"></td>
                <td>収支を編集できます。</td>
                <td>-</td>
            </tr>
            <tr>
                <td><img src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}" alt=""
                        class="d-inline-block"></td>
                <td>収支を削除できます。</td>
                <td>-</td>
            </tr>
        </tbody>
    </table>
    <div class="border mb-5"> <img src="{{ asset('storage/document/transaction_list_2.png') }}" alt=""
            class="object-fill"> </div>
    <h2 class="font-semibold text-l text-gray-800 leading-tight">前月残高確定</h2>
    <p>初回表示時、または前月残高確定を行っていない月は以下のボタンが表示されます。</p>
    <p>ボタンを押して前月残高を確定することで、前月の繰越金として表示され、今月の残高に反映がされます。</p>
    <div class="border mb-2"> <img src="{{ asset('storage/document/transaction_list_3.png') }}" alt=""
            class="object-fill"> </div>
    <p>前月残高確定後の表示。前月（2024-07-01～2024-07-31）の最終残高が今月（2024-08）の最初に作成され、そこから残高が計算されます。</p>
    <p class="text-danger">※前月残高確定処理を行わない場合は、前月残高は今月残高に反映されず、0として計算されています。</p>
    <div class="border mb-5"> <img src="{{ asset('storage/document/transaction_list_4.png') }}" alt=""
            class="object-fill"> </div>
</div>
