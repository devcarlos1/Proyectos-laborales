<?php

use App\Models\Service;
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
        $all = Service::all()->toArray();
        Schema::dropIfExists('services');
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image')->nullable();
            $table->string('description');
            $table->string('icon')->nullable();

            $table->unsignedBigInteger('category')->nullable();
            $table->foreign('category')->references('id')->on('categories')->cascadeOnDelete();

            $table->bigInteger('price')->unsigned();
            $table->boolean('onlyBank')->default(false);
            $table->integer('line');

            $table->string('key');
            $table->string('package');
        });
        foreach ($all as $key => $line) {
            $new = new Service();
            $new->id = $line['id'];
            $new->title = $line['title'];
            $new->image = $line['image'];
            $new->description = $line['description'];
            $new->category = $line['category'];
            $new->price = $line['price'];
            $new->onlyBank = $line['onlyBank'];
            $new->line = $line['line'];
            $new->key = $line['key'];
            $new->package = $line['package'];
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
