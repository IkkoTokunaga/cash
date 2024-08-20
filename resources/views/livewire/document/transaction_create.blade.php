<div>
    <p>上部ナビバーから作成を選択し、以下の画面へ移動してください。</p>
    <p>フォームに入力して、作成ボタンを押します。</p>
    <div class="border mb-5">
        <img src="{{ asset('storage/document/transaction_create_1.png') }}" alt="">
    </div>
    <p>作成には以下のような制限がかけられています。</p>
    <table class="table">
        <thead>
            <th>項目</th>
            <th>必須</th>
            <th>制限</th>
            <th></th>
            <th></th>
            <th></th>
        </thead>
        <tbody>
            <tr>
                <td>日付</td>
                <td>〇</td>
                <td>フォーマットYYY/MM/DD(例：2024/08/20)<br>締め処理後は保存できません</td>
            </tr>
            <tr>
                <td>科目</td>
                <td>〇</td>
                <td></td>
            </tr>
            <tr>
                <td>摘要</td>
                <td>〇</td>
                <td>200文字以内</td>
            </tr>
            <tr>
                <td>収支タイプ</td>
                <td>〇</td>
                <td></td>
            </tr>
            <tr>
                <td>金額 / 円</td>
                <td>〇</td>
                <td>整数<br>10桁まで（9,999,999,999 ）</td>
            </tr>
        </tbody>
    </table>
    <p>エラー時は以下のような表示になります。</p>
    <div class="border mb-5">
        <img src="{{ asset('storage/document/transaction_create_2.png') }}" alt="" class="object-fill">
    </div>
    <p>制限にかからない状態で保存ボタンを押します。</p>
    <div class="border mb-5">
        <img src="{{ asset('storage/document/transaction_create_3.png') }}" alt="" class="object-fill">
    </div>
    <p>保存に成功したら以下のような画面になります。</p>
    <div class="border mb-5">
        <img src="{{ asset('storage/document/transaction_create_4.png') }}" alt="" class="object-fill">
    </div>
</div>
