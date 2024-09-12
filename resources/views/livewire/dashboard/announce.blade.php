<?php
use Carbon\Carbon;
?>
<div>
    <table class="min-w-full border-collapse table-auto">
        <thead>
            <tr>
                <th class="border border-gray-300 bg-gray-200">更新日</th>
                <th class="border border-gray-300 bg-gray-200">内容</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($announces as $announce)
                <tr>
                    <td class="border border-gray-300">{{ $announce->date }}</td>
                    <td class="border border-gray-300">

                        <strong>
                            @if (Carbon::now()->subDay(7)->format('Ymd') < Carbon::parse($announce->date)->format('Ymd'))
                                <span
                                    class="inline-flex items-center justify-center px-2 pt-2 py-1 me-1 text-xs font-bold leading-none text-red-100 bg-red-600 ">NEW</span>
                            @endif
                            {{ $announce->title }}
                        </strong><br>{{ $announce->content }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
