<div>
    <p>上部ナビバーから一覧を選択し、以下の画面へ移動してください。</p>
    <p>修正したい項目の右部分 <img
        src="{{ asset('storage/edit_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
        alt="" class="d-inline-block">を押します。（例としてコピー用紙のサイズを変更します）</p>
    <div class="border mb-5">
        <img src="{{ asset('storage/document/transaction_edit_1.png') }}" alt="">
    </div>
    <p>以下のような画面になります。戻りたい場合は「一覧に戻る」ボタンを押してください。</p>
    <div class="border mb-5">
        <img src="{{ asset('storage/document/transaction_edit_2.png') }}" alt="">
    </div>
    <p>修正には以下のような制限がかけられています。</p>
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
                <td>フォーマットYYY/MM/DD(例：2024/08/12)<br>締め処理後は修正できません</td>
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
    <p>修正個所を変更したら（以下の図では摘要のコピー用紙のサイズを変更）、保存ボタンを押してください。</p>
    <div class="border mb-5">
        <img src="{{ asset('storage/document/transaction_edit_3.png') }}" alt="" class="object-fill">
    </div>
    <p>修正に成功したら以下のような画面になります。</p>
    <p class="text-danger">※金額が修正された場合は残高も変更後の値で再計算されます。</p>
    <div class="border mb-5">
        <img src="{{ asset('storage/document/transaction_edit_4.png') }}" alt="" class="object-fill">
    </div>
</div>
