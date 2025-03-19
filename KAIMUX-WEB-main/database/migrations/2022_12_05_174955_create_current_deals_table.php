<?php

use App\Enumerators\CurrentDealStatus;
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
        Schema::dropIfExists('current_deals');
        Schema::create('current_deals', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            
            $table->string('player');
            $table->string('servername');

            $table->unsignedBigInteger('deal')->nullable();
            $table->foreign('deal')->references('id')->on('deals')->cascadeOnDelete();

            $table->unsignedInteger('status')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('current_deals');
    }
};
