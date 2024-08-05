<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Exception;

class Account extends Model
{
    use HasFactory;

    const ACCOUNT_TABLE = 'account';

    protected $attributes = [
        'amount' => 0,
    ];

    public static function get()
    {
        $select = [
            'id',
            'code',
            'name'
        ];
        return DB::table(self::ACCOUNT_TABLE)
            ->select($select)
            ->whereNull('deleted_at')
            ->orderBy('code')
            ->get();
    }

    public static function getById($id)
    {
        $select = [
            'id',
            'code',
            'name'
        ];
        return DB::table(self::ACCOUNT_TABLE)
            ->select($select)
            ->where('id', $id)
            ->whereNull('deleted_at')
            ->first();
    }

    public static function store(array $insertData, int $id = null)
    {
        DB::beginTransaction();

        try {

            if ($id) {

                DB::table(self::ACCOUNT_TABLE)
                    ->where('id', $id)
                    ->update(['deleted_at' => now()]);
            }

            $insertId = DB::table(self::ACCOUNT_TABLE)->insertGetId($insertData);

            if (!$id && $insertId) {
                DB::table(self::ACCOUNT_TABLE)
                    ->where('id', $insertId)
                    ->update([
                        'code' => $insertId
                    ]);
            }

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

    public static function deleteById(int $id)
    {
        DB::beginTransaction();

        try {

            if ($id) {

                $deleted = DB::table(self::ACCOUNT_TABLE)
                    ->where('id', $id)
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
}
