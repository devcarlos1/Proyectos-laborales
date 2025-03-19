<?php

use App\Enumerators\OrderType;
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
        Schema::dropIfExists('payments');
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('service');
            $table->enum('orderType', OrderType::getValues());
            $table->string('username');
            $table->string('from')->nullable();
            $table->unsignedBigInteger('amount');
            $table->string('orderId');
            $table->boolean('orderStatus')->default(false);
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
