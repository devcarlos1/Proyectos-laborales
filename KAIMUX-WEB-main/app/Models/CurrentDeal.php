<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurrentDeal extends Model
{
    use HasFactory;

    public function getDeal(): Deal
    {
        return Deal::findOrFail($this->deal);
    }
}
