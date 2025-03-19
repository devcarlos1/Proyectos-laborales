<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function getServer(): Server
    {
        return Server::findOrFail($this->server);
    }

    public function getServices(): Collection
    {
        return Service::where('category', $this->id)->orderBy('line')->get();
    }
}
