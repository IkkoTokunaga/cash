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
    }
}
