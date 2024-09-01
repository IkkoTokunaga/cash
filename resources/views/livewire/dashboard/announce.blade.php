<?php
use Carbon\Carbon;
?>
<div>
    <table class="table">
        <thead>
            <tr>
                <th>更新日</th>
                <th>内容</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($announces as $announce)
                <tr>
                    <td>{{ $announce->date }}</td>
                    <td>

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
