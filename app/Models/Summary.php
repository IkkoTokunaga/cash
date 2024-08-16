<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class Summary extends Model
{
    use HasFactory;

    const SUMMARY_TABLE = 'summary';

    public static function get($date)
    {
        $select = [
            'id',
            'date',
            'amount'
        ];
        return DB::table(self::SUMMARY_TABLE)
            ->select($select)
            ->where('date', $date)
            ->where('user_id', Auth::id())
            ->whereNull('deleted_at')
            ->first();
    }

    public static function judgeFirst()
    {
        $select = [
            'id',
        ];
        return DB::table(self::SUMMARY_TABLE)
            ->select($select)
            ->where('user_id', Auth::id())
            ->whereNull('deleted_at')
            ->first() ? false : true;

    }

    public static function store($insertData)
    {
        try {
            return DB::table(self::SUMMARY_TABLE)->insertGetId($insertData);
        } catch (\Exception $e) {

            Log::error('Transaction creation failed: ' . $e->getMessage());
            throw $e;
        }
    }
}
