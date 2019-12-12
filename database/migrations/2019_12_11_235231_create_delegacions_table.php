<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDelegacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delegacions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('comite_id')->unsigned();
            $table->integer('nomenclatura_id')->unsigned();
            $table->integer('numero');
            $table->string('sede', 255);
            $table->unsignedInteger('nivel_id');
            $table->integer('region_id')->unsigned();            
            $table->string('deleg')->nullable();
            $table->string('slug')->unique();  
            
            #Domicilio Delegacional
            $table->string('calle')->nullable();
            $table->string('num_ext')->default('S/N')->nullable();
            $table->string('colonia')->nullable();
            $table->string('cp')->nullable();
            $table->string('telefono')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('municipio')->nullable();
            $table->string('estado')->nullable()->default('VERACRUZ');


            $table->softDeletes();
            $table->timestamps();

            $table->foreign('comite_id')->references('id')->on('comites');
            $table->foreign('nomenclatura_id')->references('id')->on('nomenclaturas');
            $table->foreign('region_id')->references('id')->on('regions');
            $table->foreign('nivel_id')->references('id')->on('nivels');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('delegacions');
    }
}
