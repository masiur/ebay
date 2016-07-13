<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('item_id')->unsigned();
            $table->integer('seller_id')->unsigned();
            $table->integer('buyer_id')->unsigned();
            $table->integer('receiver_id')->unsigned()->nullable();
            $table->double('decided_price')->nullable();
            $table->timestamps();

            $table->foreign('seller_id')
                ->references('id')->on('members')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('buyer_id')
                ->references('id')->on('members')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('receiver_id')
                ->references('id')->on('members')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('item_id')
                ->references('id')->on('items')
                ->onDelete('cascade')
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
        Schema::drop('quotes');
    }
}
