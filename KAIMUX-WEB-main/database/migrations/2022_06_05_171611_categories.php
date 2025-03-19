<?php

use App\Models\Category;
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
        $all = Category::all()->toArray();
        Schema::dropIfExists('categories');
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image')->nullable();
            $table->integer('line');

            $table->unsignedBigInteger('server')->nullable();
            $table->foreign('server')->references('id')->on('servers')->cascadeOnDelete();
        });
        foreach ($all as $key => $line) {
            $new = new Category();
            $new->title = $line['title'];
            $new->image = $line['image'];
            $new->line = $key;
            $new->server = $line['server'];
            $new->save();
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
