<?php

use App\Enumerators\OrderType;
use App\Models\Payment;
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
        $all = Payment::all()->toArray();
        Schema::dropIfExists('payments');
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('service');
            $table->enum('orderType', OrderType::getValues());
            $table->string('username')->nullable();
            $table->string('from')->nullable();
            $table->unsignedBigInteger('amount');
            $table->string('orderId');
            $table->boolean('orderStatus')->default(false);
            $table->boolean('test')->default(false);
            $table->string('discountCode')->nullable();
            $table->timestamps();
        });
        foreach ($all as $line) {
            $payment = new Payment();
            $payment->id = $line['id'];
            $payment->service = $line['service'];
            $payment->orderType = $line['orderType'];
            $payment->username = $line['username'];
            $payment->from = $line['from'];
            $payment->amount = $line['amount'];
            $payment->orderId = $line['orderId'];
            $payment->orderStatus = $line['orderStatus'];
            $payment->orderStatus = $line['discountCode'];
            $payment->test = $line['test'];
            $payment->created_at = now()->subMonth();
            $payment->save();

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
