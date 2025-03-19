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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image')->nullable();
            $table->string('description');

            $table->unsignedBigInteger('category')->nullable();
            $table->foreign('category')->references('id')->on('categories')->cascadeOnDelete();

            $table->bigInteger('price')->unsigned();
            $table->boolean('onlyBank')->default(false);

            $table->string('key');
            $table->string('package');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paslaugas');
    }
};
