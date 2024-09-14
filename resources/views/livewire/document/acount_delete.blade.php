<div>
    <p class="ms-2">以下のように科目の一覧が表示されています。</p>
    <p class="ms-2">宿泊費(ホテル代)が不要な項目となり削除するとします。</p>
    <p class="ms-2">宿泊費(ホテル代)項目の右部分 <img src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}" alt=""
            class="d-inline-block">を押します。</p>
    <div class="mb-5">
        <div class="p-4 sm:p-8 bg-white sm:rounded-lg border border-dark m-1 border-dark m-1">
            <div class=" max-w-xl">

                <form>

                    <label class="block font-medium text-sm text-gray-700" for="account_name">
                        科目名を入力して、作成ボタンを押してください。
                    </label>
                    <input
                        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 mb-2 w-50 block shadow-none"
                        id="account_name">
                    <input type="hidden" id="account_id" value="">
                    <span
                        class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xl sm:text-xs  text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        作成
                    </span>
                </form>
                <div class="row ">
                    <div class="col">
                        <table class="min-w-full border-collapse table-auto mt-2">
                            <caption align="top">行を選択することでで上記作成ボタンが更新ボタンになり、修正を行えます。</caption>
                            <thead class="border border-gray-300 bg-gray-200">
                                <tr>
                                    <th class="text-center">科目名</th>
                                    <th class="text-center"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="cursor: pointer;">
                                    <td class="border border-gray-300">売上</td>
                                    <td class="border border-gray-300">
                                        <div class="flex justify-content-around">
                                            <div><img
                                                    src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                                    alt="" class="min-w-[30px]"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr style="cursor: pointer;">
                                    <td class="border border-gray-300">仕入</td>
                                    <td class="border border-gray-300">
                                        <div class="flex justify-content-around">
                                            <div><img
                                                    src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                                    alt="" class="min-w-[30px]"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr style="cursor: pointer;">
                                    <td class="border border-gray-300">消耗品</td>
                                    <td class="border border-gray-300">
                                        <div class="flex justify-content-around">
                                            <div><img
                                                    src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                                    alt="" class="min-w-[30px]"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr style="cursor: pointer;">
                                    <td class="border border-gray-300">交通費</td>
                                    <td class="border border-gray-300">
                                        <div class="flex justify-content-around">
                                            <div><img
                                                    src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                                    alt="" class="min-w-[30px]"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr style="cursor: pointer;">
                                    <td class="border border-gray-300">雑費</td>
                                    <td class="border border-gray-300">
                                        <div class="flex justify-content-around">
                                            <div><img
                                                    src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                                    alt="" class="min-w-[30px]"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr style="cursor: pointer;">
                                    <td class="border border-gray-300">宿泊費(ホテル代)</td>
                                    <td class="border border-gray-300">
                                        <div class="flex justify-content-around">
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
    </div>
    <p class="ms-2">ポップアップで削除しても問題ないか確認されますので、OKを押します。</p>
    <p class="ms-2">キャンセルを押した場合は削除されません。</p>
    <p class="ms-2 text-danger">※削除後のデータはもとに戻せませんので、最新の注意をお願いします。</p>
    <p class="ms-2">削除が完了すると以下のような表示となります。</p>
    <div class="mb-5">
        <div class="p-4 sm:p-8 bg-white sm:rounded-lg border border-dark m-1 border-dark m-1">
            <div class=" max-w-xl">
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4"> 削除しました。 </div>

                <form>

                    <label class="block font-medium text-sm text-gray-700" for="account_name">
                        科目名を入力して、作成ボタンを押してください。
                    </label>
                    <input
                        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 mb-2 w-50 block shadow-none"
                        id="account_name">

                    <span
                        class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xl sm:text-xs  text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        作成
                    </span>
                </form>
                <div class="row ">
                    <div class="col">
                        <table class="min-w-full border-collapse table-auto mt-2">
                            <caption align="top">行を選択することでで上記作成ボタンが更新ボタンになり、修正を行えます。</caption>
                            <thead class="border border-gray-300 bg-gray-200">
                                <tr>
                                    <th class="text-center">科目名</th>
                                    <th class="text-center"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="cursor: pointer;">
                                    <td class="border border-gray-300">売上</td>
                                    <td class="border border-gray-300">
                                        <div class="flex justify-content-around">
                                            <div><img
                                                    src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                                    alt="" class="min-w-[30px]"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr style="cursor: pointer;">
                                    <td class="border border-gray-300">仕入</td>
                                    <td class="border border-gray-300">
                                        <div class="flex justify-content-around">
                                            <div><img
                                                    src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                                    alt="" class="min-w-[30px]"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr style="cursor: pointer;">
                                    <td class="border border-gray-300">消耗品</td>
                                    <td class="border border-gray-300">
                                        <div class="flex justify-content-around">
                                            <div><img
                                                    src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                                    alt="" class="min-w-[30px]"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr style="cursor: pointer;">
                                    <td class="border border-gray-300">交通費</td>
                                    <td class="border border-gray-300">
                                        <div class="flex justify-content-around">
                                            <div><img
                                                    src="{{ asset('storage/delete_24dp_666666_FILL0_wght400_GRAD0_opsz24.svg') }}"
                                                    alt="" class="min-w-[30px]"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr style="cursor: pointer;">
                                    <td class="border border-gray-300">雑費</td>
                                    <td class="border border-gray-300">
                                        <div class="flex justify-content-around">
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
    </div>
</div>
