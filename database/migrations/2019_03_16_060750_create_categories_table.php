<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() //CONTIENE LOS CODIGOS PARA HACER EFECTIVA LA MIGRACION LOS CAMBIOS A REALIZAR SE REALIZAN AQUI
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');//Clave primatia id
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();//Añade dos columnas created_at y updated_at para guardar la fecha de creacion y actualizaciones
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()//PARA VOLVER A LAS VERSIONES ANTERIORES
    {
        Schema::dropIfExists('categories');
    }
}
