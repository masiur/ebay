<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->text('about')->nullable();
            $table->string('address')->nullable();
            $table->text('tc')->nullable();
            $table->text('privacy_policy')->nullable();
            $table->string('img_url');
            $table->timestamps();

            $table->integer('seller_id')->unsigned();
            $table->foreign('seller_id')
                ->references('id')->on('members')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->integer('shop_category_id')->unsigned();
            $table->foreign('shop_category_id')
                ->references('id')->on('shop_categories')
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
        Schema::drop('shops');
    }
}
