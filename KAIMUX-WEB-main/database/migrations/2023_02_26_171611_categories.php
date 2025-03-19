<?php

use App\Models\Category;
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
        $all = Category::all()->toArray();
        $allServices = Service::all()->toArray();
        Schema::dropIfExists('categories');
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image')->nullable();
            $table->integer('line');
            $table->string('icon')->nullable();

            $table->unsignedBigInteger('server')->nullable();
            $table->foreign('server')->references('id')->on('servers')->cascadeOnDelete();
        });
        foreach ($all as $key => $line) {
            $new = new Category();
            $new->id = $line['id'];
            $new->title = $line['title'];
            $new->image = $line['image'];
            $new->line = $line['line'];
            $new->server = $line['server'];
            $new->save();
        }
        foreach ($allServices as $key => $line) {
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
