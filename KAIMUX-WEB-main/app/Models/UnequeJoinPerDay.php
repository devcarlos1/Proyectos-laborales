<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnequeJoinPerDay extends Model
{
    use HasFactory;

    protected $fillable = ['count'];

    public static function addToToday($count = 1)
    {
        $today = self::whereDate('created_at', today())->first();
        if ($today) {
            $today->count += $count;
            $today->save();
        } else {
            self::create(['count' => $count]);
        }
    }
}
