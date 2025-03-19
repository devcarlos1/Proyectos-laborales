<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiscountCode extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function setCodeAttribute(string $code)
    {
        $this->attributes['code'] = strtoupper($code);
    }
}
