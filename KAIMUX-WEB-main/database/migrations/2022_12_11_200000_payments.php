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
            $table->unsignedBigInteger('orderType')->default(0);
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

            if ($line['orderType'] == 'BANK')
                $payment->orderType = OrderType::BANK;
            else if ($line['orderType'] == 'SMS')
                $payment->orderType = OrderType::SMS;

            $payment->username = $line['username'];
            $payment->from = $line['from'];
            $payment->amount = $line['amount'];
            $payment->orderId = $line['orderId'];
            $payment->orderStatus = $line['orderStatus'];
            $payment->discountCode = $line['discountCode'];
            $payment->test = $line['test'];
            $payment->created_at = $line['created_at'];
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
