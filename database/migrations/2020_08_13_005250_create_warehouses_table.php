<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWarehousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warehouses', function (Blueprint $table) {
            $table->id();
            $table->string('direction', 100); //Direccion
            $table->string('kind', 50); //Tipo
            
            $table->unsignedBigInteger('companie_id');
            $table->foreign('companie_id')->references('id')->on('companies');
            
            $table->timestamp('created_date'); //Fecha de creacion
            $table->timestamp('updated_date')->nullable(); //Fecha de Modificacion 
            $table->timestamp('deleted_date')->nullable(); //Fecha de eliminacion
            $table->integer('created_user')->nullable(); //Usuario de creacion 
            $table->integer('updated_user')->nullable(); //Usuario de modificacion
            $table->integer('deleted_user')->nullable(); //Usuario de eliminacion
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('warehouses');
    }
}
