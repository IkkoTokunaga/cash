<div>
    <p>上部ナビバーから作成を選択し、以下の画面へ移動してください。</p>
    <p>フォームに入力して、作成ボタンを押します。</p>
    <div class="mb-5">
        <div class="p-4 sm:p-8 bg-white sm:rounded-lg border">
            <div class=" max-w-xl">
                <form>
                    <p>各項目を入力して保存ボタンを押してください。<br>※<span class="text-xs font-semibold bg-rose-500 text-white px-2 py-1">
                            必須
                        </span>

                        は必須項目です。</p>
                    <table class="table table-bordered mt-2 ">
                        <tbody>
                            <tr>
                                <th class="table-success">
                                    <label class="block font-medium text-sm text-gray-700" for="date">
                                        日付
                                    </label>
                                    <span class="text-xs font-semibold bg-rose-500 text-white px-2 py-1">
                                        必須
                                    </span>

                                </th>
                                <td>
                                    <input
                                        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block shadow-none"
                                        id="date" name="date" type="date">
                                </td>
                            </tr>
                            <tr>
                                <th class="table-success">
                                    <label class="block font-medium text-sm text-gray-700" for="account_id">
                                        科目
                                    </label>
                                    <span class="text-xs font-semibold bg-rose-500 text-white px-2 py-1">
                                        必須
                                    </span>

                                </th>
                                <td>
                                    <select id="account_id"
                                        class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md">
                                        <option value="">選択してください</option>
                                        <option value="55">売上</option>
                                        <option value="56">仕入</option>
                                        <option value="57">消耗品</option>
                                        <option value="58">交通費</option>
                                        <option value="60">雑費</option>

                                    </select>

                                </td>
                            </tr>
                            <tr>
                                <th class="table-success">
                                    <label class="block font-medium text-sm text-gray-700" for="target_user_id">
                                        取引先
                                    </label>
                                </th>
                                <td>
                                    <div class="flex justify-start items-center">
                                        <input
                                            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm me-1 block shadow-none w-[60px]"
                                            id="date" name="date" type="text">
                                        <select id="target_user_id"
                                            class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md">
                                            <option value="">選択してください</option>
                                            <option value="13">テスト売上先</option>

                                        </select>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <th class="table-success">
                                    <label class="block font-medium text-sm text-gray-700" for="description">
                                        摘要
                                    </label>
                                    <span class="text-xs font-semibold bg-rose-500 text-white px-2 py-1">
                                        必須
                                    </span>

                                </th>
                                <td>
                                    <input
                                        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full mt-1 block shadow-none"
                                        id="description" name="description" type="text">

                                </td>
                            </tr>
                            <tr>
                                <th class="table-success">
                                    <label class="block font-medium text-sm text-gray-700">
                                        収支タイプ
                                    </label>
                                    <span class="text-xs font-semibold bg-rose-500 text-white px-2 py-1">
                                        必須
                                    </span>

                                </th>
                                <td>
                                    <label for="income">収入
                                        <input type="radio" id="income" value="income" name="payment_type"
                                            class="me-3"></label>
                                    <label for="expense">支出
                                        <input type="radio" id="expense" value="expense" name="payment_type"
                                            class="me-3"></label>


                                </td>
                            </tr>
                            <tr>
                                <th class="table-success">
                                    <label class="block font-medium text-sm text-gray-700" for="payment">
                                        金額 / 円
                                    </label>
                                    <span class="text-xs font-semibold bg-rose-500 text-white px-2 py-1">
                                        必須
                                    </span>

                                </th>
                                <td>
                                    <input
                                        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full mt-1 block shadow-none"
                                        id="payment" name="payment" type="number">

                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="flex justify-center items-center">
                        <span
                            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xl sm:text-xs  text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            保存
                        </span>
                    </div>
                </form>
            </div>
        </div>
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
