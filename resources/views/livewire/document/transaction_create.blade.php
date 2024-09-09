<div>
    <p class="ms-2">上部ナビバーから作成を選択し、以下の画面へ移動してください。</p>
    <p class="ms-2">フォームに入力して、作成ボタンを押します。</p>
    <div class="mb-5">
        <div class="p-4 sm:p-8 bg-white sm:rounded-lg border">
            <div class=" max-w-xl">
                <form>
                    <p class="ms-2">各項目を入力して保存ボタンを押してください。<br>※<x-required-label />

                        は必須項目です。</p>
                    <table class="table table-bordered mt-2 ">
                        <tbody>
                            <tr>
                                <th class="table-success">
                                    <label class="block font-medium text-sm text-gray-700" for="date">
                                        日付
                                    </label>
                                    <x-required-label />

                                </th>
                                <td>
                                    <input
                                        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block shadow-none"
                                        id="date" name="date" type="date" value="2024-09-09">
                                </td>
                            </tr>
                            <tr>
                                <th class="table-success">
                                    <label class="block font-medium text-sm text-gray-700" for="account_id">
                                        科目
                                    </label>
                                    <x-required-label />

                                </th>
                                <td>
                                    <select id="account_id"
                                        class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md">
                                        <option value="">選択してください</option>
                                        <option value="">売上</option>
                                        <option value="">仕入</option>
                                        <option value="">消耗品</option>
                                        <option value="">交通費</option>
                                        <option value="">雑費</option>

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
                                            <option value="">テスト売上先</option>

                                        </select>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <th class="table-success">
                                    <label class="block font-medium text-sm text-gray-700" for="description">
                                        摘要
                                    </label>
                                    <x-required-label />

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
                                    <x-required-label />

                                </th>
                                <td>
                                    <label for="income">収入
                                        <input type="radio" id="income" value="income" name="payment_type"
                                            class="me-3" checked></label>
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
                                    <x-required-label />

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
    <p class="ms-2">作成には以下のような制限がかけられています。</p>
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
                <td>取引先</td>
                <td></td>
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
    <p class="ms-2">エラー時は以下のような表示になります。</p>
    <div class="mb-5">
        <div class="p-4 sm:p-8 bg-white sm:rounded-lg border">
            <div class=" max-w-xl">
                <form>
                    <p class="ms-2">各項目を入力して保存ボタンを押してください。<br>※<x-required-label />
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
                                    <x-required-label />

                                </th>
                                <td>
                                    <input
                                        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block shadow-none"
                                        id="date" name="date" type="date" value="2024-09-09">
                                </td>
                            </tr>
                            <tr>
                                <th class="table-success">
                                    <label class="block font-medium text-sm text-gray-700" for="account_id">
                                        科目
                                    </label>
                                    <x-required-label />

                                </th>
                                <td>
                                    <select id="account_id"
                                        class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md">
                                        <option value="">選択してください</option>
                                        <option value="">売上</option>
                                        <option value="">仕入</option>
                                        <option value="">消耗品</option>
                                        <option value="">交通費</option>
                                        <option value="">雑費</option>
                                    </select>
                                    <ul class="text-sm text-red-600 space-y-1 mt-2">
                                        <li>科目は必須項目です。</li>
                                    </ul>
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
                                            <option value="">テスト売上先</option>
                                        </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="table-success">
                                    <label class="block font-medium text-sm text-gray-700" for="description">
                                        摘要
                                    </label>
                                    <x-required-label />

                                </th>
                                <td>
                                    <input
                                        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full mt-1 block shadow-none"
                                        id="description" name="description" type="text">
                                    <ul class="text-sm text-red-600 space-y-1 mt-2">
                                        <li>摘要を入力してください。</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <th class="table-success">
                                    <label class="block font-medium text-sm text-gray-700">
                                        収支タイプ
                                    </label>
                                    <x-required-label />

                                </th>
                                <td>
                                    <label for="income">収入
                                        <input type="radio" id="income" value="income" name="payment_type"
                                            class="me-3" checked></label>
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
                                    <x-required-label />

                                </th>
                                <td>
                                    <input
                                        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full mt-1 block shadow-none"
                                        id="payment" name="payment" type="number">
                                    <ul class="text-sm text-red-600 space-y-1 mt-2">
                                        <li>金額を入力してください。</li>
                                    </ul>
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
    <p class="ms-2">制限にかからない状態で保存ボタンを押します。</p>
    <div class="mb-5">
        <div class="p-4 sm:p-8 bg-white sm:rounded-lg border">
            <div class=" max-w-xl">
                <form>
                    <p class="ms-2">各項目を入力して保存ボタンを押してください。<br>※<x-required-label />
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
                                    <x-required-label />


                                </th>
                                <td>
                                    <input
                                        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block shadow-none"
                                        id="date" name="date" type="date" value="2024-09-07">

                                </td>
                            </tr>
                            <tr>
                                <th class="table-success">
                                    <label class="block font-medium text-sm text-gray-700" for="account_id">
                                        科目
                                    </label>
                                    <x-required-label />


                                </th>
                                <td>
                                    <select id="account_id"
                                        class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md">
                                        <option value="">選択してください</option>
                                        <option value="" selected>売上</option>
                                        <option value="">仕入</option>
                                        <option value="">消耗品</option>
                                        <option value="">交通費</option>
                                        <option value="">雑費</option>
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
                                            id="date" name="date" type="text" value="13">
                                        <select id="target_user_id"
                                            class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md">
                                            <option value="">選択してください</option>
                                            <option value="" selected>テスト売上先</option>
                                        </select>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <th class="table-success">
                                    <label class="block font-medium text-sm text-gray-700" for="description">
                                        摘要
                                    </label>
                                    <x-required-label />


                                </th>
                                <td>
                                    <input
                                        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full mt-1 block shadow-none"
                                        id="description" name="description" type="text" value="売上＿商品A＿200個">

                                </td>
                            </tr>
                            <tr>
                                <th class="table-success">
                                    <label class="block font-medium text-sm text-gray-700">
                                        収支タイプ
                                    </label>
                                    <x-required-label />


                                </th>
                                <td>
                                    <label for="expense">収入

                                    <input type="radio" id="income" value="income" name="payment_type"
                                        class="me-3" checked></label>
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
                                    <x-required-label />


                                </th>
                                <td>
                                    <input
                                        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full mt-1 block shadow-none"
                                        id="payment" name="payment" type="number" value="98000">

                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="flex justify-center items-center">
                        <span
                            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xl sm:text-xs  text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 me-5">
                            保存
                        </span>
                        <span
                            class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xl sm:text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
                            一覧へ戻る
                        </span>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <p class="ms-2">保存に成功したら以下のような画面になります。</p>
    <div class=" mb-5">
        <div class="p-4 sm:p-8 bg-white sm:rounded-lg border">
            <div class="max-w-full">
                <div class="alert alert-info"> 保存しました。 </div>
                <div class="flex items-center">
                    <div class="me-5 sm:me-2">
                        <span
                            class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xl sm:text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
                            ◀
                        </span>
                    </div>
                    <div class="me-5 sm:me-2">
                        <h2 class="font-semibold text-l text-gray-800 leading-tight py-2">2024年09月</h2>
                    </div>
                    <div>
                        <span
                            class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xl sm:text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
                            ▶
                        </span>
                    </div>
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
                            <td class="text-center">8/31</td>
                            <td colspan="5" class="text-primary hidden md:table-cell">前月繰越金</td>
                            <td colspan="2" class="text-primary md:hidden">前月繰越金</td>
                            <td class="text-end">1,000</td>
                            <td></td>
                        </tr>
                        <tr class="table-info" style="cursor: pointer;">
                            <td class="text-center">
                                9/7
                            </td>
                            <td class="hidden md:table-cell">
                                売上
                            </td>
                            <td class="hidden md:table-cell">
                                テスト売上先
                            </td>
                            <td>
                                <span class="md:hidden text-success">
                                    【 科目 】売上<br>
                                </span>
                                <span class="md:hidden text-success">
                                    【取引先】テスト売上先<br>
                                </span>
                                売上＿商品A＿200個
                            </td>
                            <td class="text-end">
                                98,000
                                <span class="md:hidden">

                                </span>
                            </td>
                            <td class="text-end hidden md:table-cell">

                            </td>
                            <td class="text-end">
                                99,000</td>
                            <td>
                                <div class="d-flex justify-center">
                                    <div
                                        style="cursor: pointer;">
                                        <img src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                            alt="削除" class="min-w-[30px]">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="4" class="table-success hidden md:table-cell">合計</th>
                            <th colspan="2" class="table-success md:hidden">合計</th>
                            <td class="text-end hidden md:table-cell">
                                98,000</td>
                            <td class="text-end md:hidden">
                                98,000</td>
                            <td class="text-end hidden md:table-cell">
                            </td>
                            <td class="text-end">99,000</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
