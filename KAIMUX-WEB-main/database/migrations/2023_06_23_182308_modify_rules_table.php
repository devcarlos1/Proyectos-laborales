<?php

use App\Models\Rule;
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
        $rules = Rule::all()->toArray();

        Schema::dropIfExists('rules');
        Schema::create('rules', function (Blueprint $table) {
            $table->id();
            $table->string('rule');
            $table->string('punishment')->nullable();
            $table->string('servers')->default('*');
        });

        foreach ($rules as $rule) {
            $newRule = new Rule();
            $newRule->rule = $rule['rule'];
            $newRule->punishment = $rule['punishment'];
            $newRule->servers = '*';
            $newRule->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rules');
    }
};
