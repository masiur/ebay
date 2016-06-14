<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesRecordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_records', function (Blueprint $table) {
            $table->increments('id');
            $table->string('item_name');
            $table->integer('buyer_id')->unsigned();
            $table->integer('seller_id')->unsigned();
            $table->integer('amount');
            $table->double('price');

            $table->foreign('buyer_id')
                ->references('id')->on('members');

            $table->foreign('seller_id')
                ->references('id')->on('members');

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
        Schema::drop('sales_records');
    }
}
