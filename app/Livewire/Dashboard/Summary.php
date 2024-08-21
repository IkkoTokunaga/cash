<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Summary as SummaryData;

class Summary extends Component
{
    public $summaries = [];

    const GET_SUMMARY_LIMIT = 10;

    public function mount()
    {
        $summaries = SummaryData::getAll(self::GET_SUMMARY_LIMIT)->toArray();

        $count = count($summaries);
        for ($i = $count - 1; $i >= 0; $i--) {

            $compared = '';
            $triangle = '　';

            if (isset($summaries[$i + 1]) && intval($summaries[$i + 1]->amount) > 0) {
                $compared = (intval($summaries[$i]->amount) / intval($summaries[$i + 1]->amount) ) * 100;
                if ( $compared > 100 ) {
                    $triangle = "<span class='text-primary'>▲</span>";
                } elseif ($compared < 100) {
                    $triangle = "<span class='text-danger'>▼</span>";
                }
                $compared = round($compared) . ' % ';
            }else {
                $compared = '-';
            }

            $summaries[$i]->compared = $compared;
            $summaries[$i]->triangle = $triangle;
        }

        $this->summaries = $summaries;
    }


    public function render()
    {
        return view(
            'livewire.dashboard.summary'
        );
    }
}
