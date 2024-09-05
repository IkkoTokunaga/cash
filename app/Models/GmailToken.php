<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Exception;

class GmailToken extends Model
{
    use HasFactory;

    const ACCOUNT_TABLE = 'gmail_tokens';

    public static function get()
    {
        $select = [
            'access_token',
            'refresh_token',
            'expires_in'
        ];
        return DB::table(self::ACCOUNT_TABLE)
            ->select($select)
            ->whereNull('deleted_at')
            ->first();
    }

    public static function store(array $insertData)
    {
        DB::beginTransaction();

        try {

            DB::table(self::ACCOUNT_TABLE)
                ->whereNull('deleted_at')
                ->update(['deleted_at' => now()]);

            $insertId = DB::table(self::ACCOUNT_TABLE)->insertGetId($insertData);

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
}
