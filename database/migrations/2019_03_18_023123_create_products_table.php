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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('descripcion');
            $table->text('long_descripcion')->nullable();
            $table->float('price');

            //CLAVE FORANEA
            $table->bigInteger('category_id')->unsigned()->nullable(); //CREACION DE LA COLUMNA
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            //INTRUCCION PARA QUE LA COLUMNA ACTUE COMO UNA CLAVE FORANEA 
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
