<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookSpasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_spas', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('partydate');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->text('message');
            $table->timestamps();
            $table->text('verifyCode');
            $table->integer('status')->default(0);
//            status = 0: chua verify | 1: đã verify
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_spas');
    }
}
