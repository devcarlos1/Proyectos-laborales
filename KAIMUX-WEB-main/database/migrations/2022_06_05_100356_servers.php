<?php

use App\Models\Server;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $allServers = Server::all()->toArray();
        Schema::dropIfExists('servers');
        Schema::create('servers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image')->nullable();
            $table->string('rconIp');
            $table->string('rconPort');
            $table->string('rconPass');
            $table->integer('line');
        });
        foreach ($allServers as $i => $serverLine) {
            $server = new Server();
            $server->id = $serverLine['id'];
            $server->title = $serverLine['title'];
            $server->image = $serverLine['image'];
            $server->rconIp = $serverLine['rconIp'];
            $server->rconPort = $serverLine['rconPort'];
            $server->rconPass = $serverLine['rconPass'];
            $server->line = $i;
            $server->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
