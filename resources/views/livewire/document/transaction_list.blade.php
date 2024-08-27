<div>
    <p>上部ナビバーから一覧を選択し、以下の画面へ移動してください。</p>
    <p>初回ログイン時は以下のような画面となります。作成画面で保存を行うと一覧に収支が表示されます。</p>
    <p class="text-danger">※「前月残高確定」を押すと前月以前の収支について追加・修正ができなくなってしまうため、ご注意ください。（以下の図では2024年09月以前が変更できなくなります）</p>
    <div class="border mb-5">
        <img src="{{ asset('storage/document/transaction_list_1.png') }}" alt="">
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
                <td><img
                    src="{{ asset('storage/edit_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                    alt="" class="d-inline-block"></td>
                <td>収支を編集できます。</td>
                <td>-</td>
            </tr>
            <tr>
                <td><img
                    src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                    alt="" class="d-inline-block"></td>
                <td>収支を削除できます。</td>
                <td>-</td>
            </tr>
        </tbody>
    </table>
    <div class="border mb-5">
        <img src="{{ asset('storage/document/transaction_list_2.png') }}" alt="" class="object-fill">
    </div>
    <h2 class="font-semibold text-l text-gray-800 leading-tight">前月残高確定</h2>
    <p>初回表示時、または前月残高確定を行っていない月は以下のボタンが表示されます。</p>
    <p>ボタンを押して前月残高を確定することで、前月の繰越金として表示され、今月の残高に反映がされます。</p>
    <div class="border mb-2">
        <img src="{{ asset('storage/document/transaction_list_3.png') }}" alt="" class="object-fill">
    </div>
    <p>前月残高確定後の表示。前月（2024-07-01～2024-07-31）の最終残高が今月（2024-08）の最初に作成され、そこから残高が計算されます。</p>
    <p class="text-danger">※前月残高確定処理を行わない場合は、前月残高は今月残高に反映されず、0として計算されています。</p>
    <div class="border mb-5">
        <img src="{{ asset('storage/document/transaction_list_4.png') }}" alt="" class="object-fill">
    </div>
</div>
