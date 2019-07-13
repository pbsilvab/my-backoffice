<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Rate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rates', function (Blueprint $table) {

            $table->increments('id');
            $table->boolean('positive')->default(0);
            $table->boolean('regular')->default(0);
            $table->boolean('negative')->default(0);
            $table->integer('post_id')->unsigned()->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('post_id')->references('id')->on('posts');

        });
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
}
