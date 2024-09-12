<div>
    <p class="ms-2">上部ナビバーから一覧を選択し、以下の画面へ移動してください。</p>
    <p class="ms-2">初回ログイン時は以下のような画面となります。作成画面で保存を行うと一覧に収支が表示されます。</p>
    <p class="ms-2 text-danger">※「前月残高確定」を押すと前月以前の収支について追加・修正ができなくなってしまうため、ご注意ください。（以下の図では2024年09月以前が変更できなくなります）</p>
    <div class=" mb-5">
        <div class="p-4 sm:p-8 bg-white sm:rounded-lg border border-dark m-1 border-dark m-1">
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
                            <td class="border border-gray-300 text-center">9/30</td>
                            <td colspan="5" class="border border-gray-300 hidden md:table-cell"> ❕前月残高が確定されていません<br>
                                <x-danger-button>
                                    前月残高確定 </x-danger-button> </td>
                            <td colspan="2" class="border border-gray-300 md:hidden"> ❕前月残高が確定されていません<br>
                                <x-danger-button> 前月残高確定
                                </x-danger-button> </td>
                            <td class="border border-gray-300"></td>
                            <td class="border border-gray-300"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <p class="ms-2">一覧画面の表示項目</p>
    <table class="min-w-full border-collapse table-auto">
        <thead class="border border-gray-300 text-center">
            <th>項目</th>
            <th>説明</th>
            <th>例</th>
        </thead>
        <tbody class="border border-gray-300">
            <tr>
                <td class="border border-gray-300">日付</td>
                <td class="border border-gray-300">作成画面で登録した日付です。</td>
                <td class="border border-gray-300">2024-08-20</td>
            </tr>
            <tr>
                <td class="border border-gray-300">科目</td>
                <td class="border border-gray-300">作成画面で選択した科目です。</td>
                <td class="border border-gray-300">売上、仕入など</td>
            </tr>
            <tr>
                <td class="border border-gray-300">摘要</td>
                <td class="border border-gray-300">作成画面で入力した適用です。</td>
                <td class="border border-gray-300">仕入＿10個</td>
            </tr>
            <tr>
                <td class="border border-gray-300">収入 / 円</td>
                <td class="border border-gray-300">収支タイプが収入の場合の金額です。</td>
                <td class="border border-gray-300">10,000</td>
            </tr>
            <tr>
                <td class="border border-gray-300">支出 / 円</td>
                <td class="border border-gray-300">収支タイプが支出の場合の金額です。</td>
                <td class="border border-gray-300">10,000</td>
            </tr>
            <tr>
                <td class="border border-gray-300">残高 / 円</td>
                <td class="border border-gray-300">現在までの収支の金額です。</td>
                <td class="border border-gray-300">30,000<br>(マイナス値もありえます）</td>
            </tr>
            <tr>
                <td class="border border-gray-300"><img
                        src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}" alt=""
                        class="d-inline-block"></td>
                <td class="border border-gray-300">収支を削除できます。</td>
                <td class="border border-gray-300">-</td>
            </tr>
        </tbody>
    </table>
    <div class="mb-5">
        <div class="p-4 sm:p-8 bg-white sm:rounded-lg border border-dark m-1 border-dark m-1">
            <div class="max-w-full">
                <div class="flex items-center">
                    <div class="me-5 sm:me-2"> <span
                            class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xl sm:text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">◀</span>
                    </div>
                    <div class="me-5 sm:me-2">
                        <h2 class="font-semibold text-l text-gray-800 leading-tight py-2">2024年08月</h2>
                    </div>
                    <div> <span
                            class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xl sm:text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">▶</span>
                    </div>
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
                            <td class="text-center border border-gray-300 ">7/31</td>
                            <td colspan="5" class="border border-gray-300 hidden md:table-cell"> ❕前月残高が確定されていません<br>
                                <span type="submit"
                                    class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xl sm:text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">前月残高確定</span>
                            </td>
                            <td colspan="2" class="md:hidden"> ❕前月残高が確定されていません<br> <button type="submit"
                                    class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xl sm:text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">前月残高確定</button>
                            </td>
                            <td class="border border-gray-300"></td>
                            <td class="border border-gray-300"></td>
                        </tr>
                        <tr style="cursor: pointer;">
                            <td class="text-center border border-gray-300 "> 8/5 </td>
                            <td class="border border-gray-300 hidden md:table-cell"> 売上 </td>
                            <td class="border border-gray-300 hidden md:table-cell"> </td>
                            <td class="border border-gray-300"> <span class="md:hidden text-success"> 【 科目 】売上<br>
                                </span> 半沢商事＿売上＿60個 </td>
                            <td class="border border-gray-300 text-end"> 99,000 <span class="md:hidden"> </span> </td>
                            <td class="border border-gray-300 text-end hidden md:table-cell"> </td>
                            <td class="border border-gray-300 text-end"> 99,000</td>
                            <td class="border border-gray-300">
                                <div class="flex justify-center">
                                    <div style="cursor: pointer;"> <img
                                            src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                            alt="削除" class="min-w-[30px]"> </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="cursor: pointer;">
                            <td class="text-center border border-gray-300 "> 8/5 </td>
                            <td class="border border-gray-300 hidden md:table-cell"> 仕入 </td>
                            <td class="border border-gray-300 hidden md:table-cell"> </td>
                            <td class="border border-gray-300"> <span class="md:hidden text-success"> 【 科目 】仕入<br>
                                </span> 岸和田ベンダー＿仕入＿20個 </td>
                            <td class="border border-gray-300 text-end"> <span class="md:hidden"> -36,000 </span>
                            </td>
                            <td class="border border-gray-300 text-end hidden md:table-cell"> 36,000 </td>
                            <td class="border border-gray-300 text-end"> 63,000</td>
                            <td class="border border-gray-300">
                                <div class="flex justify-center">
                                    <div style="cursor: pointer;"> <img
                                            src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                            alt="削除" class="min-w-[30px]"> </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="cursor: pointer;">
                            <td class="text-center border border-gray-300 "> 8/12 </td>
                            <td class="border border-gray-300 hidden md:table-cell"> 消耗品 </td>
                            <td class="border border-gray-300 hidden md:table-cell"> </td>
                            <td class="border border-gray-300"> <span class="md:hidden text-success"> 【 科目 】消耗品<br>
                                </span> コピー用紙＿B5＿50セット </td>
                            <td class="border border-gray-300 text-end"> <span class="md:hidden"> -50,000 </span>
                            </td>
                            <td class="border border-gray-300 text-end hidden md:table-cell"> 50,000 </td>
                            <td class="border border-gray-300 text-end"> 13,000</td>
                            <td class="border border-gray-300">
                                <div class="flex justify-center">
                                    <div style="cursor: pointer;"> <img
                                            src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                            alt="削除" class="min-w-[30px]"> </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="cursor: pointer;">
                            <td class="text-center border border-gray-300 "> 8/14 </td>
                            <td class="border border-gray-300 hidden md:table-cell"> 売上 </td>
                            <td class="border border-gray-300 hidden md:table-cell"> </td>
                            <td class="border border-gray-300"> <span class="md:hidden text-success"> 【 科目 】売上<br>
                                </span> 近藤医院＿売上＿1600個 </td>
                            <td class="border border-gray-300 text-end"> 862,000 <span class="md:hidden"> </span>
                            </td>
                            <td class="border border-gray-300 text-end hidden md:table-cell"> </td>
                            <td class="border border-gray-300 text-end"> 875,000</td>
                            <td class="border border-gray-300">
                                <div class="flex justify-center">
                                    <div style="cursor: pointer;"> <img
                                            src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                            alt="削除" class="min-w-[30px]"> </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="cursor: pointer;">
                            <td class="text-center border border-gray-300 "> 8/15 </td>
                            <td class="border border-gray-300 hidden md:table-cell"> 仕入 </td>
                            <td class="border border-gray-300 hidden md:table-cell"> </td>
                            <td class="border border-gray-300"> <span class="md:hidden text-success"> 【 科目 】仕入<br>
                                </span> 材料AAA＿9600個 </td>
                            <td class="border border-gray-300 text-end"> <span class="md:hidden"> -140,000 </span>
                            </td>
                            <td class="border border-gray-300 text-end hidden md:table-cell"> 140,000 </td>
                            <td class="border border-gray-300 text-end"> 735,000</td>
                            <td class="border border-gray-300">
                                <div class="flex justify-center">
                                    <div style="cursor: pointer;"> <img
                                            src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                            alt="削除" class="min-w-[30px]"> </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="cursor: pointer;">
                            <td class="text-center border border-gray-300 "> 8/15 </td>
                            <td class="border border-gray-300 hidden md:table-cell"> 売上 </td>
                            <td class="border border-gray-300 hidden md:table-cell"> </td>
                            <td class="border border-gray-300"> <span class="md:hidden text-success"> 【 科目 】売上<br>
                                </span> 宮地電機＿売上＿4800個 </td>
                            <td class="border border-gray-300 text-end"> 463,000 <span class="md:hidden"> </span>
                            </td>
                            <td class="border border-gray-300 text-end hidden md:table-cell"> </td>
                            <td class="border border-gray-300 text-end"> 1,198,000</td>
                            <td class="border border-gray-300">
                                <div class="flex justify-center">
                                    <div style="cursor: pointer;"> <img
                                            src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                            alt="削除" class="min-w-[30px]"> </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="cursor: pointer;">
                            <td class="text-center border border-gray-300 "> 8/16 </td>
                            <td class="border border-gray-300 hidden md:table-cell"> 仕入 </td>
                            <td class="border border-gray-300 hidden md:table-cell"> </td>
                            <td class="border border-gray-300"> <span class="md:hidden text-success"> 【 科目 】仕入<br>
                                </span> はなベンダー＿仕入＿9900個 </td>
                            <td class="border border-gray-300 text-end"> <span class="md:hidden"> -99,000 </span>
                            </td>
                            <td class="border border-gray-300 text-end hidden md:table-cell"> 99,000 </td>
                            <td class="border border-gray-300 text-end"> 1,099,000</td>
                            <td class="border border-gray-300">
                                <div class="flex justify-center">
                                    <div style="cursor: pointer;"> <img
                                            src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                            alt="削除" class="min-w-[30px]"> </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="cursor: pointer;">
                            <td class="text-center border border-gray-300 "> 8/16 </td>
                            <td class="border border-gray-300 hidden md:table-cell"> 売上 </td>
                            <td class="border border-gray-300 hidden md:table-cell"> </td>
                            <td class="border border-gray-300"> <span class="md:hidden text-success"> 【 科目 】売上<br>
                                </span> 売上＿徳永商事様 </td>
                            <td class="border border-gray-300 text-end"> 24,000 <span class="md:hidden"> </span> </td>
                            <td class="border border-gray-300 text-end hidden md:table-cell"> </td>
                            <td class="border border-gray-300 text-end"> 1,123,000</td>
                            <td class="border border-gray-300">
                                <div class="flex justify-center">
                                    <div style="cursor: pointer;"> <img
                                            src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                            alt="削除" class="min-w-[30px]"> </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="cursor: pointer;">
                            <td class="text-center border border-gray-300 "> 8/20 </td>
                            <td class="border border-gray-300 hidden md:table-cell"> 売上 </td>
                            <td class="border border-gray-300 hidden md:table-cell"> </td>
                            <td class="border border-gray-300"> <span class="md:hidden text-success"> 【 科目 】売上<br>
                                </span> 売上 </td>
                            <td class="border border-gray-300 text-end"> 96,000 <span class="md:hidden"> </span> </td>
                            <td class="border border-gray-300 text-end hidden md:table-cell"> </td>
                            <td class="border border-gray-300 text-end"> 1,219,000</td>
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
                            <td class="border border-gray-300 text-end hidden md:table-cell"> 1,544,000</td>
                            <td class="border border-gray-300 text-end md:hidden"> 1,219,000</td>
                            <td class="border border-gray-300 text-end hidden md:table-cell"> 325,000</td>
                            <td class="border border-gray-300 text-end">1,219,000</td>
                            <td class="border border-gray-300"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <h2 class="font-semibold text-l text-gray-800 leading-tight">前月残高確定</h2>
    <p class="ms-2">初回表示時、または前月残高確定を行っていない月は以下のボタンが表示されます。</p>
    <p class="ms-2">ボタンを押して前月残高を確定することで、前月の繰越金として表示され、今月の残高に反映がされます。</p>
    <div class=" mb-2">
        <div class="p-4 sm:p-8 bg-white sm:rounded-lg border border-dark m-1 border-dark m-1">
            <div> ❕前月残高が確定されていません<br> <span
                    class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xl sm:text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">前月残高確定</span>
            </div>
        </div>
    </div>
    <p class="ms-2">前月残高確定後の表示。前月（2024-07-01～2024-07-31）の最終残高が今月（2024-08）の最初に作成され、そこから残高が計算されます。</p>
    <p class="ms-2 text-danger">※前月残高確定処理を行わない場合は、前月残高は今月残高に反映されず、0として計算されています。</p>
    <div class=" mb-5">
        <div class="p-4 sm:p-8 bg-white sm:rounded-lg border border-dark m-1 border-dark m-1">
            <div class="max-w-full">
                <div class="alert alert-info"> 前月残高確定処理が完了しました。 </div>
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
                        <tr class="table-info">
                            <td class="text-center border border-gray-300 ">7/31</td>
                            <td colspan="5" class="text-primary hidden md:table-cell">前月繰越金</td>
                            <td colspan="2" class="text-primary md:hidden">前月繰越金</td>
                            <td class="border border-gray-300 text-end">67,894</td>
                            <td class="border border-gray-300"></td>
                        </tr>
                        <tr style="cursor: pointer;">
                            <td class="text-center border border-gray-300 "> 8/5 </td>
                            <td class="border border-gray-300 hidden md:table-cell"> 売上 </td>
                            <td class="border border-gray-300 hidden md:table-cell"> </td>
                            <td class="border border-gray-300"> <span class="md:hidden text-success"> 【 科目 】売上<br>
                                </span> 半沢商事＿売上＿60個 </td>
                            <td class="border border-gray-300 text-end"> 99,000 <span class="md:hidden"> </span> </td>
                            <td class="border border-gray-300 text-end hidden md:table-cell"> </td>
                            <td class="border border-gray-300 text-end"> 166,894</td>
                            <td class="border border-gray-300">
                                <div class="flex justify-center">
                                    <div style="cursor: pointer;"> <img
                                            src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                            alt="削除" class="min-w-[30px]"> </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="cursor: pointer;">
                            <td class="text-center border border-gray-300 "> 8/5 </td>
                            <td class="border border-gray-300 hidden md:table-cell"> 仕入 </td>
                            <td class="border border-gray-300 hidden md:table-cell"> </td>
                            <td class="border border-gray-300"> <span class="md:hidden text-success"> 【 科目 】仕入<br>
                                </span> 岸和田ベンダー＿仕入＿20個 </td>
                            <td class="border border-gray-300 text-end"> <span class="md:hidden"> -36,000 </span>
                            </td>
                            <td class="border border-gray-300 text-end hidden md:table-cell"> 36,000 </td>
                            <td class="border border-gray-300 text-end"> 130,894</td>
                            <td class="border border-gray-300">
                                <div class="flex justify-center">
                                    <div style="cursor: pointer;"> <img
                                            src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                            alt="削除" class="min-w-[30px]"> </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="cursor: pointer;">
                            <td class="text-center border border-gray-300 "> 8/12 </td>
                            <td class="border border-gray-300 hidden md:table-cell"> 消耗品 </td>
                            <td class="border border-gray-300 hidden md:table-cell"> </td>
                            <td class="border border-gray-300"> <span class="md:hidden text-success"> 【 科目 】消耗品<br>
                                </span> コピー用紙＿B5＿50セット </td>
                            <td class="border border-gray-300 text-end"> <span class="md:hidden"> -50,000 </span>
                            </td>
                            <td class="border border-gray-300 text-end hidden md:table-cell"> 50,000 </td>
                            <td class="border border-gray-300 text-end"> 80,894</td>
                            <td class="border border-gray-300">
                                <div class="flex justify-center">
                                    <div style="cursor: pointer;"> <img
                                            src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                            alt="削除" class="min-w-[30px]"> </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="cursor: pointer;">
                            <td class="text-center border border-gray-300 "> 8/14 </td>
                            <td class="border border-gray-300 hidden md:table-cell"> 売上 </td>
                            <td class="border border-gray-300 hidden md:table-cell"> </td>
                            <td class="border border-gray-300"> <span class="md:hidden text-success"> 【 科目 】売上<br>
                                </span> 近藤医院＿売上＿1600個 </td>
                            <td class="border border-gray-300 text-end"> 862,000 <span class="md:hidden"> </span>
                            </td>
                            <td class="border border-gray-300 text-end hidden md:table-cell"> </td>
                            <td class="border border-gray-300 text-end"> 942,894</td>
                            <td class="border border-gray-300">
                                <div class="flex justify-center">
                                    <div style="cursor: pointer;"> <img
                                            src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                            alt="削除" class="min-w-[30px]"> </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="cursor: pointer;">
                            <td class="text-center border border-gray-300 "> 8/15 </td>
                            <td class="border border-gray-300 hidden md:table-cell"> 仕入 </td>
                            <td class="border border-gray-300 hidden md:table-cell"> </td>
                            <td class="border border-gray-300"> <span class="md:hidden text-success"> 【 科目 】仕入<br>
                                </span> 材料AAA＿9600個 </td>
                            <td class="border border-gray-300 text-end"> <span class="md:hidden"> -140,000 </span>
                            </td>
                            <td class="border border-gray-300 text-end hidden md:table-cell"> 140,000 </td>
                            <td class="border border-gray-300 text-end"> 802,894</td>
                            <td class="border border-gray-300">
                                <div class="flex justify-center">
                                    <div style="cursor: pointer;"> <img
                                            src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                            alt="削除" class="min-w-[30px]"> </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="cursor: pointer;">
                            <td class="text-center border border-gray-300 "> 8/15 </td>
                            <td class="border border-gray-300 hidden md:table-cell"> 売上 </td>
                            <td class="border border-gray-300 hidden md:table-cell"> </td>
                            <td class="border border-gray-300"> <span class="md:hidden text-success"> 【 科目 】売上<br>
                                </span> 宮地電機＿売上＿4800個 </td>
                            <td class="border border-gray-300 text-end"> 463,000 <span class="md:hidden"> </span>
                            </td>
                            <td class="border border-gray-300 text-end hidden md:table-cell"> </td>
                            <td class="border border-gray-300 text-end"> 1,265,894</td>
                            <td class="border border-gray-300">
                                <div class="flex justify-center">
                                    <div style="cursor: pointer;"> <img
                                            src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                            alt="削除" class="min-w-[30px]"> </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="cursor: pointer;">
                            <td class="text-center border border-gray-300 "> 8/16 </td>
                            <td class="border border-gray-300 hidden md:table-cell"> 仕入 </td>
                            <td class="border border-gray-300 hidden md:table-cell"> </td>
                            <td class="border border-gray-300"> <span class="md:hidden text-success"> 【 科目 】仕入<br>
                                </span> はなベンダー＿仕入＿9900個 </td>
                            <td class="border border-gray-300 text-end"> <span class="md:hidden"> -99,000 </span>
                            </td>
                            <td class="border border-gray-300 text-end hidden md:table-cell"> 99,000 </td>
                            <td class="border border-gray-300 text-end"> 1,166,894</td>
                            <td class="border border-gray-300">
                                <div class="flex justify-center">
                                    <div style="cursor: pointer;"> <img
                                            src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                            alt="削除" class="min-w-[30px]"> </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="cursor: pointer;">
                            <td class="text-center border border-gray-300 "> 8/16 </td>
                            <td class="border border-gray-300 hidden md:table-cell"> 売上 </td>
                            <td class="border border-gray-300 hidden md:table-cell"> </td>
                            <td class="border border-gray-300"> <span class="md:hidden text-success"> 【 科目 】売上<br>
                                </span> 売上＿徳永商事様 </td>
                            <td class="border border-gray-300 text-end"> 24,000 <span class="md:hidden"> </span> </td>
                            <td class="border border-gray-300 text-end hidden md:table-cell"> </td>
                            <td class="border border-gray-300 text-end"> 1,190,894</td>
                            <td class="border border-gray-300">
                                <div class="flex justify-center">
                                    <div style="cursor: pointer;"> <img
                                            src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                            alt="削除" class="min-w-[30px]"> </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="cursor: pointer;">
                            <td class="text-center border border-gray-300 "> 8/20 </td>
                            <td class="border border-gray-300 hidden md:table-cell"> 売上 </td>
                            <td class="border border-gray-300 hidden md:table-cell"> </td>
                            <td class="border border-gray-300"> <span class="md:hidden text-success"> 【 科目 】売上<br>
                                </span> 売上 </td>
                            <td class="border border-gray-300 text-end"> 96,000 <span class="md:hidden"> </span> </td>
                            <td class="border border-gray-300 text-end hidden md:table-cell"> </td>
                            <td class="border border-gray-300 text-end"> 1,286,894</td>
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
                            <td class="border border-gray-300 text-end hidden md:table-cell"> 1,544,000</td>
                            <td class="border border-gray-300 text-end md:hidden"> 1,219,000</td>
                            <td class="border border-gray-300 text-end hidden md:table-cell"> 325,000</td>
                            <td class="border border-gray-300 text-end">1,286,894</td>
                            <td class="border border-gray-300"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
