<?php
use Carbon\Carbon;
?>
<div>
    <table class="min-w-full border-collapse table-auto">
        <thead class="border border-gray-300 bg-gray-200">
            <th>期間</th>
            <th>残高 / 円</th>
            <th>前月比</th>
        </thead>
        <tbody>
            @foreach ($summaries as $summary)
                <tr>
                    <td class="border border-gray-300">
                        {{ Carbon::parse($summary->date)->format('Y-m-01') }} ~
                        {{ Carbon::parse($summary->date)->format('m-d') }}
                    </td>
                    <td class="text-end border border-gray-300">
                        {{ number_format($summary->amount) }}
                    </td>
                    <td class="text-end border border-gray-300">
                        {{ $summary->compared }} {!! $summary->triangle !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
