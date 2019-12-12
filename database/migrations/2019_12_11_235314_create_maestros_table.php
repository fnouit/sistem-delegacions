<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaestrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maestros', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('delegacion_id')->unsigned();
            $table->unsignedInteger('secretaria_id')->unsigned();
            
            $table->string('titulo',180)->unique();
            $table->string('nombre',180);
            $table->string('ap_paterno',180);
            $table->string('ap_materno',180);
            $table->string('rfc',180);
            $table->unsignedInteger('genero_id')->unsigned();
            $table->unsignedInteger('cargo_id')->unsigned();
            
            $table->string('email')->unique();
            $table->string('celular')->nullable();
            $table->string('telefono')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('seccion')->nullable()->default('56');
            $table->string('estado')->nullable()->default('VERACRUZ');
            
            // Datos de domicilio 
            $table->string('calle')->nullable();
            $table->string('numero_ext')->nullable();
            $table->string('colonia')->nullable();
            $table->string('cp')->nullable();
            $table->string('municipio')->nullable();
            $table->string('ciudad')->nullable();
            
            $table->string('slug')->unique();     
            $table->string('imagen')->default('avatar.png');

            $table->foreign('delegacion_id')->references('id')->on('delegacions');
            $table->foreign('secretaria_id')->references('id')->on('secretarias');
            $table->foreign('genero_id')->references('id')->on('generos');
            $table->foreign('cargo_id')->references('id')->on('cargos');

            $table->softDeletes();
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
        Schema::dropIfExists('maestros');
    }
}
