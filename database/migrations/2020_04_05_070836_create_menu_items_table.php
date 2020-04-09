<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {//apha sort
        Schema::create('menu_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name'); //item name
            $table->string('url');
            $table->enum('location', ['top', 'main'])->default('main');
            $table->unsignedBigInteger('group_id')->nullable()->default(null);
            $table->timestamps();

            $table->unique(['name', 'url']);

            $table->foreign('group_id')->references('id')->on('menu_groups')
                ->onDelete(null)
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_items');
    }
}
