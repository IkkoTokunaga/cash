<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Exception;
use Illuminate\Support\Facades\Auth;

class Transaction extends Model
{
    use HasFactory;

    const TRANSACTION_TABLE = 'transaction';
    const ACCOUNT_TABLE = 'account';

    public static function store(array $insertData, int $id = null)
    {
        DB::beginTransaction();

        try {

            if ($id) {

                DB::table(self::TRANSACTION_TABLE)
                    ->where('id', $id)
                    ->where('user_id', Auth::id())
                    ->update(['deleted_at' => now()]);
            }

            $insertId = DB::table(self::TRANSACTION_TABLE)->insertGetId($insertData);

            DB::commit();

            return $insertId;
        } catch (Exception $e) {

            DB::rollBack();
            Log::critical($e->getMessage());
            throw new Exception(
                'Failed to save.',
                500
            );
        }
    }

    public static function get($month)
    {
        $select = [
            't.id',
            't.date',
            't.description',
            't.account_id',
            't.income',
            't.expense',
            'a.name as account_name',
        ];

        return DB::table(self::TRANSACTION_TABLE . ' as t')
            ->select($select)
            ->leftJoin(self::ACCOUNT_TABLE . ' as a', 'a.id', 't.account_id')
            ->where('t.date', 'LIKE', $month . '%')
            ->where('t.user_id', Auth::id())
            ->whereNull('t.deleted_at')
            ->orderBy('t.date')
            ->get()
            ->toArray() ?? [];
    }

    public static function getById(int $id)
    {
        $select = [
            'id',
            'user_id',
            'date',
            'description',
            'account_id',
            'income',
            'expense',
        ];

        return DB::table(self::TRANSACTION_TABLE)
            ->select($select)
            ->where('id', $id)
            ->where('user_id', Auth::id())
            ->whereNull('deleted_at')
            ->first();
    }

    public static function deleteById(int $id)
    {
        DB::beginTransaction();

        try {

            if ($id) {

                $deleted = DB::table(self::TRANSACTION_TABLE)
                    ->where('id', $id)
                    ->where('user_id', Auth::id())
                    ->update(['deleted_at' => now()]);
                DB::commit();
                return $deleted;
            }

            return false;
        } catch (Exception $e) {

            DB::rollBack();
            Log::critical('Failed to delete.' . $id);
            throw new Exception(
                'Failed to save.',
                500
            );
        }
    }

    public static function summary($month)
    {
        return DB::table(self::TRANSACTION_TABLE)
            ->selectRaw('SUM(income) - SUM(expense) as summary')
            ->where('date', 'LIKE', $month . '%')
            ->where('user_id', Auth::id())
            ->whereNull('deleted_at')
            ->first();
    }
}
