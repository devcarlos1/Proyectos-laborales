<?php

namespace App\Models;

use App\API\Rcon\Rcon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function getCategories(): Collection
    {
        return Category::where('server', $this->id)->orderBy('line')->get();
    }

    public function sendCommand(string $command): void
    {
        $rcon = new Rcon($this->rconIp, $this->rconPort, $this->rconPass, 100);
        if ($rcon->connect()) {
            $rcon->send_command($command);
        } else {
            die('Could not connect to server!');
        }
    }
}
