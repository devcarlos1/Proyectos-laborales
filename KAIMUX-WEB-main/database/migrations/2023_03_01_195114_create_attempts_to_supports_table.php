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
        Schema::create('attempts_to_supports', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('username');
            $table->string('slug');
            $table->integer('correct_persentage');
            $table->text('additional_anwsers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attempts_to_supports');
    }
};
