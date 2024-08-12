<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Exception;
use Illuminate\Support\Facades\Auth;

class Support extends Model
{
    use HasFactory;

    const SUPPORT_TABLE = 'support';

    public static function get()
    {
        return DB::table(self::SUPPORT_TABLE)
            ->whereNull('deleted_at')
            ->get();
    }

    public static function getById($id)
    {
        return DB::table(self::SUPPORT_TABLE)
            ->where('id', $id)
            ->whereNull('deleted_at')
            ->first();
    }

    public static function store(array $insertData, int $id = null)
    {
        DB::beginTransaction();

        try {

            $insertId = DB::table(self::SUPPORT_TABLE)->insertGetId($insertData);
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

                $deleted = DB::table(self::SUPPORT_TABLE)
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
