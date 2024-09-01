<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Announce extends Model
{
    use HasFactory;

    const ANNOUNCE_TABLE = 'announce';

    public static function getAll($limit = null)
    {
        $select = [
            'id',
            'date',
            'title',
            'content'
        ];
        return DB::table(self::ANNOUNCE_TABLE)
            ->select($select)
            ->whereNull('deleted_at')
            ->orderBy('date', 'desc')
            ->limit($limit)
            ->get();
    }

}
