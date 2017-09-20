<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLibros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->increments('id');
            $table->integer ('id_proveedor')->unsigned();
            $table->foreign ('id_proveedor')->references('id')->on('proveedores');
            $table->string ('descripcion', 100);
            $table->string ('autor', 100);
            $table->string ('editorial', 100);
            $table->string ('tipo_tapa', 50);
            $table->float ('precio', 8,2);
            $table->string ('isbn', 20);
            $table->date ('fecha_emision');



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
        Schema::dropIfExists('libros');
    }
}
