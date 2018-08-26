<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('images');
            $table->string('title')->unique();
            $table->text('description');
            $table->integer('price');
            $table->string('father')->nullable();
            $table->string('mother')->nullable();
            $table->string('paper')->nullable();
            $table->integer('discount')->nullable();
            $table->integer('categoryId')->unsigned();
            $table->foreign('categoryId')->references('id')->on('categories');
            $table->integer('status')->default(1); // 0: out of stock - 1: new - 2: discount - 3: hot
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
        Schema::dropIfExists('products');
    }
}
