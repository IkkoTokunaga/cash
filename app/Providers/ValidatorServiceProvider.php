<?php

namespace App\Providers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;
use App\Models\Summary;

class ValidatorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        /**
         * 月次で締めていれば保存できない
         */
        Validator::extend(
            'isnot_monthly_closing',
            function ($attribute, $value, $parameters, $validator) {
                $prevEndOfMonth = Carbon::parse($value)->format('Y-m-t');
                $isMonthlyClosing = Summary::get($prevEndOfMonth);

                return $isMonthlyClosing ? false : true;
            }
        );
        /**
         * 前月が締められているかどうか
         */
        Validator::extend(
            'is_prev_monthly_closing',
            function ($attribute, $value, $parameters, $validator) {
                $prevEndOfMonth = Carbon::parse($value)->subMonth()->format('Y-m-t');
                $isMonthlyClosing = Summary::get($prevEndOfMonth);

                // 初回は保存できないため、初回の締め処理は例外
                if (!$isMonthlyClosing) {
                    return Summary::judgeFirst() ? true : false;
                }

                return $isMonthlyClosing ? true : false;
            }
        );
    }
}
