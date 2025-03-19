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
        Schema::dropIfExists('discount_codes');
        Schema::create('discount_codes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('code');
            $table->integer('amount');
            $table->date('valid_from');
            $table->date('valid_to');
            $table->bigInteger('limit')->nullable();
            $table->string('valid_for')->nullable();
            $table->string('valid_for_service')->nullable();
            $table->string('uses')->default(0);
            $table->timestamps();
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
