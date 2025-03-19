<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function getCategory(): Category
    {
        return Category::findOrFail($this->category);
    }

    public function setKeyAttribute(string $key)
    {
        $this->attributes['key'] = strtoupper($key);
    }
}
