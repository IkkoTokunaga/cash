<?php
use Carbon\Carbon;
?>
<div>
    <table class="table table-bordered">
        <thead class="table-success">
            <th>期間</th>
            <th>残高 / 円</th>
            <th>前月比</th>
        </thead>
        <tbody>
            @foreach ($summaries as $summary)
                <tr>
                    <td>
                        {{ Carbon::parse($summary->date)->format('Y-m-01') }} ~
                        {{ Carbon::parse($summary->date)->format('m-d') }}
                    </td>
                    <td class="text-end">
                        {{ number_format($summary->amount) }}
                    </td>
                    <td class="text-end">
                        {{ $summary->compared }} {!! $summary->triangle !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
