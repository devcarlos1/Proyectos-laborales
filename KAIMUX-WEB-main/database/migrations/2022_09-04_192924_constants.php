<?php

use App\Enumerators\ConstantType;
use App\Models\Constant;
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
        $all = Constant::all()->toArray();
        Schema::dropIfExists('constants');
        Schema::create('constants', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('value');
        });
        foreach ($all as $constant) {
            $new = new Constant();
            $new->type = $constant['type'];
            $new->value = $constant['value'];
            $new->save();
        }
        foreach (ConstantType::getAll() as $key => $type) {
            if (!Constant::where('type', $type)->first()) {
                $discord = new Constant();
                $discord->type = $type;
                $discord->value = "TEST";
                $discord->save();
            }
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
