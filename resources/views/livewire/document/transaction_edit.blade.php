<div>
    <p class="ms-2">上部ナビバーから一覧を選択し、以下の画面へ移動してください。</p>
    <p class="ms-2">修正したい行をクリックします。（例としてコピー用紙のサイズを変更します）</p>
    <div class=" mb-5">
        <div class="p-4 sm:p-8 bg-white sm:rounded-lg border border-dark m-1 border-dark m-1">
            <div class="max-w-full">
                <div class="flex items-center">
                    <div class="me-5 sm:me-2"> <span
                            class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xl sm:text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
                            ◀ </span> </div>
                    <div class="me-5 sm:me-2">
                        <h2 class="font-semibold text-l text-gray-800 leading-tight py-2">2024年08月</h2>
                    </div>
                    <div> <span
                            class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xl sm:text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
                            ▶ </span> </div>
                </div>
                <table class="min-w-full border-collapse table-auto mt-2">
                    <caption align="top">行を選択することでで編集画面へ移動できます。</caption>
                    <thead class="border border-gray-300 bg-gray-200">
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
                            <td class="text-center">7/31</td>
                            <td colspan="5" class="text-primary hidden md:table-cell">前月繰越金</td>
                            <td colspan="2" class="text-primary md:hidden">前月繰越金</td>
                            <td class="text-end">67,894</td>
                            <td class="border border-gray-300"></td>
                        </tr>
                        <tr style="cursor: pointer;">
                            <td class="text-center"> 8/5 </td>
                            <td class="hidden md:table-cell"> 売上 </td>
                            <td class="hidden md:table-cell"> </td>
                            <td class="border border-gray-300"> <span class="md:hidden text-success"> 【 科目 】売上<br> </span> 半沢商事＿売上＿60個 </td>
                            <td class="text-end"> 99,000 <span class="md:hidden"> </span> </td>
                            <td class="text-end hidden md:table-cell"> </td>
                            <td class="text-end"> 166,894</td>
                            <td class="border border-gray-300">
                                <div class="flex justify-center">
                                    <div style="cursor: pointer;"> <img
                                            src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                            alt="削除" class="min-w-[30px]"> </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="cursor: pointer;">
                            <td class="text-center"> 8/5 </td>
                            <td class="hidden md:table-cell"> 仕入 </td>
                            <td class="hidden md:table-cell"> </td>
                            <td class="border border-gray-300"> <span class="md:hidden text-success"> 【 科目 】仕入<br> </span> 岸和田ベンダー＿仕入＿20個 </td>
                            <td class="text-end"> <span class="md:hidden"> -36,000 </span> </td>
                            <td class="text-end hidden md:table-cell"> 36,000 </td>
                            <td class="text-end"> 130,894</td>
                            <td class="border border-gray-300">
                                <div class="flex justify-center">
                                    <div style="cursor: pointer;"> <img
                                            src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                            alt="削除" class="min-w-[30px]"> </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="cursor: pointer;">
                            <td class="text-center"> 8/12 </td>
                            <td class="hidden md:table-cell"> 消耗品 </td>
                            <td class="hidden md:table-cell"> </td>
                            <td class="border border-gray-300"> <span class="md:hidden text-success"> 【 科目 】消耗品<br> </span> コピー用紙＿B5＿50セット </td>
                            <td class="text-end"> <span class="md:hidden"> -50,000 </span> </td>
                            <td class="text-end hidden md:table-cell"> 50,000 </td>
                            <td class="text-end"> 80,894</td>
                            <td class="border border-gray-300">
                                <div class="flex justify-center">
                                    <div style="cursor: pointer;"> <img
                                            src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                            alt="削除" class="min-w-[30px]"> </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="cursor: pointer;">
                            <td class="text-center"> 8/14 </td>
                            <td class="hidden md:table-cell"> 売上 </td>
                            <td class="hidden md:table-cell"> </td>
                            <td class="border border-gray-300"> <span class="md:hidden text-success"> 【 科目 】売上<br> </span> 近藤医院＿売上＿1600個 </td>
                            <td class="text-end"> 862,000 <span class="md:hidden"> </span> </td>
                            <td class="text-end hidden md:table-cell"> </td>
                            <td class="text-end"> 942,894</td>
                            <td class="border border-gray-300">
                                <div class="flex justify-center">
                                    <div style="cursor: pointer;"> <img
                                            src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                            alt="削除" class="min-w-[30px]"> </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="cursor: pointer;">
                            <td class="text-center"> 8/15 </td>
                            <td class="hidden md:table-cell"> 仕入 </td>
                            <td class="hidden md:table-cell"> </td>
                            <td class="border border-gray-300"> <span class="md:hidden text-success"> 【 科目 】仕入<br> </span> 材料AAA＿9600個 </td>
                            <td class="text-end"> <span class="md:hidden"> -140,000 </span> </td>
                            <td class="text-end hidden md:table-cell"> 140,000 </td>
                            <td class="text-end"> 802,894</td>
                            <td class="border border-gray-300">
                                <div class="flex justify-center">
                                    <div style="cursor: pointer;"> <img
                                            src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                            alt="削除" class="min-w-[30px]"> </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="cursor: pointer;">
                            <td class="text-center"> 8/15 </td>
                            <td class="hidden md:table-cell"> 売上 </td>
                            <td class="hidden md:table-cell"> </td>
                            <td class="border border-gray-300"> <span class="md:hidden text-success"> 【 科目 】売上<br> </span> 宮地電機＿売上＿4800個 </td>
                            <td class="text-end"> 463,000 <span class="md:hidden"> </span> </td>
                            <td class="text-end hidden md:table-cell"> </td>
                            <td class="text-end"> 1,265,894</td>
                            <td class="border border-gray-300">
                                <div class="flex justify-center">
                                    <div style="cursor: pointer;"> <img
                                            src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                            alt="削除" class="min-w-[30px]"> </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="cursor: pointer;">
                            <td class="text-center"> 8/16 </td>
                            <td class="hidden md:table-cell"> 仕入 </td>
                            <td class="hidden md:table-cell"> </td>
                            <td class="border border-gray-300"> <span class="md:hidden text-success"> 【 科目 】仕入<br> </span> はなベンダー＿仕入＿9900個 </td>
                            <td class="text-end"> <span class="md:hidden"> -99,000 </span> </td>
                            <td class="text-end hidden md:table-cell"> 99,000 </td>
                            <td class="text-end"> 1,166,894</td>
                            <td class="border border-gray-300">
                                <div class="flex justify-center">
                                    <div style="cursor: pointer;"> <img
                                            src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                            alt="削除" class="min-w-[30px]"> </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="cursor: pointer;">
                            <td class="text-center"> 8/16 </td>
                            <td class="hidden md:table-cell"> 売上 </td>
                            <td class="hidden md:table-cell"> </td>
                            <td class="border border-gray-300"> <span class="md:hidden text-success"> 【 科目 】売上<br> </span> 売上＿徳永商事様 </td>
                            <td class="text-end"> 24,000 <span class="md:hidden"> </span> </td>
                            <td class="text-end hidden md:table-cell"> </td>
                            <td class="text-end"> 1,190,894</td>
                            <td class="border border-gray-300">
                                <div class="flex justify-center">
                                    <div style="cursor: pointer;"> <img
                                            src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                            alt="削除" class="min-w-[30px]"> </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="cursor: pointer;">
                            <td class="text-center"> 8/20 </td>
                            <td class="hidden md:table-cell"> 売上 </td>
                            <td class="hidden md:table-cell"> </td>
                            <td class="border border-gray-300"> <span class="md:hidden text-success"> 【 科目 】売上<br> </span> 売上 </td>
                            <td class="text-end"> 96,000 <span class="md:hidden"> </span> </td>
                            <td class="text-end hidden md:table-cell"> </td>
                            <td class="text-end"> 1,286,894</td>
                            <td class="border border-gray-300">
                                <div class="flex justify-center">
                                    <div style="cursor: pointer;"> <img
                                            src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                            alt="削除" class="min-w-[30px]"> </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="4" class="border border-gray-300 bg-gray-200 hidden md:table-cell">合計</th>
                            <th colspan="2" class="border border-gray-300 bg-gray-200 md:hidden">合計</th>
                            <td class="text-end hidden md:table-cell"> 1,544,000</td>
                            <td class="text-end md:hidden"> 1,219,000</td>
                            <td class="text-end hidden md:table-cell"> 325,000</td>
                            <td class="text-end">1,286,894</td>
                            <td class="border border-gray-300"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <p class="ms-2">以下のような画面になります。戻りたい場合は「一覧に戻る」ボタンを押してください。</p>
    <div class=" mb-5">
        <div class="p-4 sm:p-8 bg-white sm:rounded-lg border border-dark m-1 border-dark m-1">
            <div class=" max-w-xl">
                <form wire:submit="save">
                    <p class="ms-2">各項目を入力して保存ボタンを押してください。<br>※<span class="text-xs font-semibold bg-rose-500 text-white px-2 py-1">
                            必須 </span> は必須項目です。</p>
                    <table class="min-w-full border-collapse table-auto mt-2 ">
                        <tbody>
                            <tr>
                                <th class="border border-gray-300 bg-gray-200"> <label class="block font-medium text-sm text-gray-700"
                                        for="date"> 日付 </label> <span
                                        class="text-xs font-semibold bg-rose-500 text-white px-2 py-1"> 必須 </span>
                                </th>
                                <td class="border border-gray-300"> <input
                                        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block shadow-none"
                                        id="date" name="date" type="date" value="2024-09-09"> </td>
                            </tr>
                            <tr>
                                <th class="border border-gray-300 bg-gray-200"> <label class="block font-medium text-sm text-gray-700"
                                        for="account_id"> 科目 </label> <span
                                        class="text-xs font-semibold bg-rose-500 text-white px-2 py-1"> 必須 </span>
                                </th>
                                <td class="border border-gray-300"> <select id="account_id"
                                        class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md">
                                        <option value="">選択してください</option>
                                        <option value="">売上</option>
                                        <option value="">仕入</option>
                                        <option value="">消耗品</option>
                                        <option value="">交通費</option>
                                        <option value="">雑費</option>
                                    </select> </td>
                            </tr>
                            <tr>
                                <th class="border border-gray-300 bg-gray-200"> <label class="block font-medium text-sm text-gray-700"
                                        for="target_user_id"> 取引先 </label> </th>
                                <td class="border border-gray-300">
                                    <div class="flex justify-start items-center"> <input
                                            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm me-1 block shadow-none w-[60px]"
                                            id="date" name="date" type="text"> <select
                                            id="target_user_id"
                                            class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md">
                                            <option value="">選択してください</option>
                                            <option value="">テスト売上先</option>
                                        </select> </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="border border-gray-300 bg-gray-200"> <label class="block font-medium text-sm text-gray-700"
                                        for="description"> 摘要 </label> <span
                                        class="text-xs font-semibold bg-rose-500 text-white px-2 py-1"> 必須 </span>
                                </th>
                                <td class="border border-gray-300"> <input
                                        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full mt-1 block shadow-none"
                                        id="description" name="description" type="text"> </td>
                            </tr>
                            <tr>
                                <th class="border border-gray-300 bg-gray-200"> <label class="block font-medium text-sm text-gray-700">
                                        収支タイプ </label> <span
                                        class="text-xs font-semibold bg-rose-500 text-white px-2 py-1"> 必須 </span>
                                </th>
                                <td class="border border-gray-300"> <label for="income">収入 <input type="radio" id="income" value="income"
                                            name="payment_type" class="me-3" checked></label> <label for="expense">支出
                                        <input type="radio" id="expense" value="expense" name="payment_type"
                                            class="me-3"></label> </td>
                            </tr>
                            <tr>
                                <th class="border border-gray-300 bg-gray-200"> <label class="block font-medium text-sm text-gray-700"
                                        for="payment"> 金額 / 円 </label> <span
                                        class="text-xs font-semibold bg-rose-500 text-white px-2 py-1"> 必須 </span>
                                </th>
                                <td class="border border-gray-300"> <input
                                        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full mt-1 block shadow-none"
                                        id="payment" name="payment" type="number"> </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="flex justify-center items-center"> <span
                            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xl sm:text-xs  text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 me-5">
                            保存 </span> <span
                            class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xl sm:text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
                            一覧へ戻る </span> </div>
                </form>
            </div>
        </div>
    </div>
    <p class="ms-2">修正には以下のような制限がかけられています。</p>
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
                <td class="border border-gray-300">日付</td>
                <td class="border border-gray-300">〇</td>
                <td class="border border-gray-300">フォーマットYYY/MM/DD(例：2024/08/12)<br>締め処理後は修正できません</td>
            </tr>
            <tr>
                <td class="border border-gray-300">科目</td>
                <td class="border border-gray-300">〇</td>
                <td class="border border-gray-300"></td>
            </tr>
            <tr>
                <td class="border border-gray-300">摘要</td>
                <td class="border border-gray-300">〇</td>
                <td class="border border-gray-300">200文字以内</td>
            </tr>
            <tr>
                <td class="border border-gray-300">収支タイプ</td>
                <td class="border border-gray-300">〇</td>
                <td class="border border-gray-300"></td>
            </tr>
            <tr>
                <td class="border border-gray-300">金額 / 円</td>
                <td class="border border-gray-300">〇</td>
                <td class="border border-gray-300">整数<br>10桁まで（9,999,999,999 ）</td>
            </tr>
        </tbody>
    </table>
    <p class="ms-2">修正個所を変更したら（以下の図では摘要のコピー用紙のサイズを変更）、保存ボタンを押してください。</p>
    <p class="ms-2">修正に成功したら以下のような画面になります。</p>
    <p class="ms-2 text-danger">※金額が修正された場合は残高も変更後の値で再計算されます。</p>
    <div class=" mb-5">
        <div class="p-4 sm:p-8 bg-white sm:rounded-lg border border-dark m-1 border-dark m-1">
            <div class="max-w-full">
                <div class="alert alert-info"> 保存しました。 </div>
                <div class="flex items-center">
                    <div class="me-5 sm:me-2"> <span
                            class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xl sm:text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
                            ◀ </span> </div>
                    <div class="me-5 sm:me-2">
                        <h2 class="font-semibold text-l text-gray-800 leading-tight py-2">2024年08月</h2>
                    </div>
                    <div> <span
                            class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xl sm:text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
                            ▶ </span> </div>
                </div>
                <table class="min-w-full border-collapse table-auto mt-2">
                    <caption align="top">行を選択することでで編集画面へ移動できます。</caption>
                    <thead class="border border-gray-300 bg-gray-200">
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
                            <td class="text-center">7/31</td>
                            <td colspan="5" class="text-primary hidden md:table-cell">前月繰越金</td>
                            <td colspan="2" class="text-primary md:hidden">前月繰越金</td>
                            <td class="text-end">67,894</td>
                            <td class="border border-gray-300"></td>
                        </tr>
                        <tr style="cursor: pointer;">
                            <td class="text-center"> 8/5 </td>
                            <td class="hidden md:table-cell"> 売上 </td>
                            <td class="hidden md:table-cell"> </td>
                            <td class="border border-gray-300"> <span class="md:hidden text-success"> 【 科目 】売上<br> </span> 半沢商事＿売上＿60個 </td>
                            <td class="text-end"> 99,000 <span class="md:hidden"> </span> </td>
                            <td class="text-end hidden md:table-cell"> </td>
                            <td class="text-end"> 166,894</td>
                            <td class="border border-gray-300">
                                <div class="flex justify-center">
                                    <div style="cursor: pointer;"> <img
                                            src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                            alt="削除" class="min-w-[30px]"> </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="cursor: pointer;">
                            <td class="text-center"> 8/5 </td>
                            <td class="hidden md:table-cell"> 仕入 </td>
                            <td class="hidden md:table-cell"> </td>
                            <td class="border border-gray-300"> <span class="md:hidden text-success"> 【 科目 】仕入<br> </span> 岸和田ベンダー＿仕入＿20個 </td>
                            <td class="text-end"> <span class="md:hidden"> -36,000 </span> </td>
                            <td class="text-end hidden md:table-cell"> 36,000 </td>
                            <td class="text-end"> 130,894</td>
                            <td class="border border-gray-300">
                                <div class="flex justify-center">
                                    <div style="cursor: pointer;"> <img
                                            src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                            alt="削除" class="min-w-[30px]"> </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="table-info" style="cursor: pointer;">
                            <td class="text-center"> 8/12 </td>
                            <td class="hidden md:table-cell"> 消耗品 </td>
                            <td class="hidden md:table-cell"> </td>
                            <td class="border border-gray-300"> <span class="md:hidden text-success"> 【 科目 】消耗品<br> </span> コピー用紙＿A4＿50セット </td>
                            <td class="text-end"> <span class="md:hidden"> -50,000 </span> </td>
                            <td class="text-end hidden md:table-cell"> 50,000 </td>
                            <td class="text-end"> 80,894</td>
                            <td class="border border-gray-300">
                                <div class="flex justify-center">
                                    <div style="cursor: pointer;"> <img
                                            src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                            alt="削除" class="min-w-[30px]"> </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="cursor: pointer;">
                            <td class="text-center"> 8/14 </td>
                            <td class="hidden md:table-cell"> 売上 </td>
                            <td class="hidden md:table-cell"> </td>
                            <td class="border border-gray-300"> <span class="md:hidden text-success"> 【 科目 】売上<br> </span> 近藤医院＿売上＿1600個 </td>
                            <td class="text-end"> 862,000 <span class="md:hidden"> </span> </td>
                            <td class="text-end hidden md:table-cell"> </td>
                            <td class="text-end"> 942,894</td>
                            <td class="border border-gray-300">
                                <div class="flex justify-center">
                                    <div style="cursor: pointer;"> <img
                                            src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                            alt="削除" class="min-w-[30px]"> </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="cursor: pointer;">
                            <td class="text-center"> 8/15 </td>
                            <td class="hidden md:table-cell"> 仕入 </td>
                            <td class="hidden md:table-cell"> </td>
                            <td class="border border-gray-300"> <span class="md:hidden text-success"> 【 科目 】仕入<br> </span> 材料AAA＿9600個 </td>
                            <td class="text-end"> <span class="md:hidden"> -140,000 </span> </td>
                            <td class="text-end hidden md:table-cell"> 140,000 </td>
                            <td class="text-end"> 802,894</td>
                            <td class="border border-gray-300">
                                <div class="flex justify-center">
                                    <div style="cursor: pointer;"> <img
                                            src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                            alt="削除" class="min-w-[30px]"> </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="cursor: pointer;">
                            <td class="text-center"> 8/15 </td>
                            <td class="hidden md:table-cell"> 売上 </td>
                            <td class="hidden md:table-cell"> </td>
                            <td class="border border-gray-300"> <span class="md:hidden text-success"> 【 科目 】売上<br> </span> 宮地電機＿売上＿4800個 </td>
                            <td class="text-end"> 463,000 <span class="md:hidden"> </span> </td>
                            <td class="text-end hidden md:table-cell"> </td>
                            <td class="text-end"> 1,265,894</td>
                            <td class="border border-gray-300">
                                <div class="flex justify-center">
                                    <div style="cursor: pointer;"> <img
                                            src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                            alt="削除" class="min-w-[30px]"> </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="cursor: pointer;">
                            <td class="text-center"> 8/16 </td>
                            <td class="hidden md:table-cell"> 仕入 </td>
                            <td class="hidden md:table-cell"> </td>
                            <td class="border border-gray-300"> <span class="md:hidden text-success"> 【 科目 】仕入<br> </span> はなベンダー＿仕入＿9900個 </td>
                            <td class="text-end"> <span class="md:hidden"> -99,000 </span> </td>
                            <td class="text-end hidden md:table-cell"> 99,000 </td>
                            <td class="text-end"> 1,166,894</td>
                            <td class="border border-gray-300">
                                <div class="flex justify-center">
                                    <div style="cursor: pointer;"> <img
                                            src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                            alt="削除" class="min-w-[30px]"> </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="cursor: pointer;">
                            <td class="text-center"> 8/16 </td>
                            <td class="hidden md:table-cell"> 売上 </td>
                            <td class="hidden md:table-cell"> </td>
                            <td class="border border-gray-300"> <span class="md:hidden text-success"> 【 科目 】売上<br> </span> 売上＿徳永商事様 </td>
                            <td class="text-end"> 24,000 <span class="md:hidden"> </span> </td>
                            <td class="text-end hidden md:table-cell"> </td>
                            <td class="text-end"> 1,190,894</td>
                            <td class="border border-gray-300">
                                <div class="flex justify-center">
                                    <div style="cursor: pointer;"> <img
                                            src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                            alt="削除" class="min-w-[30px]"> </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="cursor: pointer;">
                            <td class="text-center"> 8/20 </td>
                            <td class="hidden md:table-cell"> 売上 </td>
                            <td class="hidden md:table-cell"> </td>
                            <td class="border border-gray-300"> <span class="md:hidden text-success"> 【 科目 】売上<br> </span> 売上 </td>
                            <td class="text-end"> 96,000 <span class="md:hidden"> </span> </td>
                            <td class="text-end hidden md:table-cell"> </td>
                            <td class="text-end"> 1,286,894</td>
                            <td class="border border-gray-300">
                                <div class="flex justify-center">
                                    <div style="cursor: pointer;"> <img
                                            src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                            alt="削除" class="min-w-[30px]"> </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="4" class="border border-gray-300 bg-gray-200 hidden md:table-cell">合計</th>
                            <th colspan="2" class="border border-gray-300 bg-gray-200 md:hidden">合計</th>
                            <td class="text-end hidden md:table-cell"> 1,544,000</td>
                            <td class="text-end md:hidden"> 1,219,000</td>
                            <td class="text-end hidden md:table-cell"> 325,000</td>
                            <td class="text-end">1,286,894</td>
                            <td class="border border-gray-300"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
