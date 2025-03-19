<?php

use App\Enumerators\DealType;
use App\Models\CurrentDeal;
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
        Schema::dropIfExists('deals');
        Schema::create('deals', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            
            $table->string('server');
            $table->string('smskey');
            $table->unsignedBigInteger('price');
            $table->string('infoTable');
            $table->string('infoFull');

            $table->unsignedBigInteger('service')->nullable();
            $table->foreign('service')->references('id')->on('services')->cascadeOnDelete();

            $table->unsignedInteger('dealType')->default(0);

            $table->unsignedBigInteger('betterDeal')->nullable();
            $table->foreign('betterDeal')->references('id')->on('deals')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deals');
    }
};
