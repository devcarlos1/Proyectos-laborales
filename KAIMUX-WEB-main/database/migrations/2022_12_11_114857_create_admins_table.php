<?php

use App\Models\Admin;
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
        $old = Admin::all()->toArray();
        Schema::dropIfExists('admins');
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedInteger('type')->default(0);
        });
        foreach ($old as $entity) {
            $admin = new Admin();
            $admin->id = $entity['id'];
            $admin->name = $entity['name'];
            $admin->type = 1;
            $admin->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
};
