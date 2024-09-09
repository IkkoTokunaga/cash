<div>
    <p class="ms-2">上部ナビバーから取引先を選択し、以下の画面から修正したい取引先名をクリックしてください。</p>
    <div class="mb-5">
        <div class="p-4 sm:p-8 bg-white sm:rounded-lg border">
            <div class="max-w-full">
                <span
                    class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xl sm:text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150 mb-2">
                    新規取引先作成
                    </span>

                    <table class="table table-bordered mt-2">
                        <thead class="table-success">
                            <tr>
                                <th class="text-center">No.</th>
                                <th class="text-center">名前</th>
                                <th class="text-center">情報</th>
                                <th class="text-center hidden md:table-cell">備考</th>
                                <th class="text-center"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="cursor: pointer;">
                                <td class="text-center">13</td>
                                <td>
                                    テスト売上先
                                    <br> (てすとうりあげさき)
                                </td>
                                <td>
                                    【 TEL 】 090-1234-5678 <br>
                                    【Email】 test@exsample.com <br>
                                    【 住所 】 東京都港区 <br>
                                    <span class="text-end md:hidden">
                                        【 備考 】 テストです。
                                        毎月100程度発注あり。
                                        要月初の連絡。
                                    </span>
                                </td>
                                <td class="hidden md:table-cell">テストです。
                                    毎月100程度発注あり。
                                    要月初の連絡。</td>
                                <td>
                                    <div class="d-flex justify-content-around">

                                        <div><img
                                                src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                                alt="" class="min-w-[30px]"></div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
    <p class="ms-2">取引先情報 修正画面へ移動します。</p>
    <p class="ms-2">必要事項を入力して保存ボタンを押します。</p>
    <div class="mb-5">
        <div class="p-4 sm:p-8 bg-white sm:rounded-lg border">
            <div class=" max-w-xl">
                <form>
                    <p class="ms-2">各項目を入力して保存ボタンを押してください。<br>※<x-required-label />

                        は必須項目です。</p>
                    <table class="table table-bordered mt-2 ">
                        <tbody>
                            <tr>
                                <th class="table-success">No.</th>
                                <td>13</td>
                            </tr>
                            <tr>
                                <th class="table-success">
                                    <label class="block font-medium text-sm text-gray-700" for="name">
                                        名前
                                    </label><x-required-label />
                                </th>
                                <td>
                                    <input
                                        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full mt-1 block shadow-none"
                                        id="name" name="name" type="text" value="テスト売上先">
                                </td>
                            </tr>
                            <tr>
                                <th class="table-success">
                                    <label class="block font-medium text-sm text-gray-700" for="kana">
                                        名前(読み方)
                                    </label>
                                </th>
                                <td>
                                    <input
                                        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full mt-1 block shadow-none"
                                        id="kana" kana="kana" type="text" value="てすとうりあげさき">
                                </td>
                            </tr>
                            <tr>
                                <th class="table-success">
                                    <label class="block font-medium text-sm text-gray-700" for="tel">
                                        電話番号
                                    </label>
                                </th>
                                <td>
                                    <input
                                        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block shadow-none"
                                        id="tel" tel="tel" type="tel" value="090-1234-5678">
                                </td>
                            </tr>
                            <tr>
                                <th class="table-success">
                                    <label class="block font-medium text-sm text-gray-700" for="email">
                                        Email
                                    </label>
                                </th>
                                <td>
                                    <input
                                        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full mt-1 block shadow-none"
                                        id="email" name="email" type="text" value="test@exsample.com">
                                </td>
                            </tr>
                            <tr>
                                <th class="table-success">
                                    <label class="block font-medium text-sm text-gray-700" for="address">
                                        住所
                                    </label>
                                </th>
                                <td>
                                    <input
                                        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full mt-1 block shadow-none"
                                        id="address" name="address" type="text" value="東京都港区">
                                </td>
                            </tr>

                            <tr>
                                <th class="table-success">
                                    <label class="block font-medium text-sm text-gray-700" for="description">
                                        備考
                                    </label>
                                </th>
                                <td>
                                    <textarea name="description" id="description" rows="10"
                                        class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">テストです。
毎月100程度発注あり。
要月初の連絡。
＝＝修正版＝＝</textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="flex justify-center items-center">
                        <span type="submit"
                            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xl sm:text-xs  text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 me-5">
                            保存
                        </span>
                        <span
                            class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xl sm:text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
                            一覧へ戻る
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <p class="ms-2">保存が正常に行われると以下のような画面となります。</p>
    <div class="mb-5">
        <div class="p-4 sm:p-8 bg-white sm:rounded-lg border">
            <div class="max-w-full">
                <div class="alert alert-info"> 保存しました。 </div>
                <span
                    class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xl sm:text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150 mb-2">
                    新規取引先作成
                </span>
                <table class="table table-bordered mt-2">
                    <thead class="table-success">
                        <tr>
                            <th class="text-center">No.</th>
                            <th class="text-center">名前</th>
                            <th class="text-center">情報</th>
                            <th class="text-center hidden md:table-cell">備考</th>
                            <th class="text-center"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table-info" style="cursor: pointer;">
                            <td class="text-center"13</td>
                            <td テスト売上先 <br> (てすとうりあげさき)
                            </td>
                            <td 【 TEL 】 090-1234-5678 <br>
                                【Email】 test@exsample.com <br>
                                【 住所 】 東京都港区 <br>
                                <span class="text-end md:hidden">
                                    【 備考 】 テストです。
                                    毎月100程度発注あり。
                                    要月初の連絡。
                                    ＝＝修正版＝＝
                                </span>
                            </td>
                            <td class="hidden md:table-cell">テストです。
                                毎月100程度発注あり。
                                要月初の連絡。
                                ＝＝修正版＝＝</td>
                            <td>
                                <div class="d-flex justify-content-around">

                                    <div><img
                                            src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                            alt="" class="min-w-[30px]"></div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
