<?php

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
        Schema::dropIfExists('d_j_queues');
        Schema::create('d_j_queues', function (Blueprint $table) {
            $table->id();
            $table->string('music');
            $table->string('username');
            $table->integer('status');
            $table->dateTime('start')->nullable();
            $table->dateTime('end')->nullable();
            $table->string('likes')->nullable();
            $table->string('dislikes')->nullable();
        });
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
