<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('item_id')->unsigned();
            $table->integer('buyer_id')->unsigned();
            $table->integer('seller_id')->unsigned();
            $table->integer('amount');

            $table->foreign('item_id')
                ->references('id')->on('items')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('buyer_id')
                ->references('id')->on('members')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('seller_id')
                ->references('id')->on('members')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            
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
        Schema::drop('carts');
    }
}
