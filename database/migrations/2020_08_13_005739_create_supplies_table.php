<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('measurements', function (Blueprint $table) {
            $table->id();
            $table->string('unit_measurement', 50); // Unidad de Medida
            $table->string('description', 50); // Descripcion
            
            $table->timestamp('created_date'); //Fecha de creacion
            $table->timestamp('updated_date')->nullable(); //Fecha de Modificacion 
            $table->timestamp('deleted_date')->nullable(); //Fecha de eliminacion
            $table->integer('created_user')->nullable(); //Usuario de creacion
            $table->integer('updated_user')->nullable(); //Usuario de modificacion
            $table->integer('deleted_user')->nullable(); //Usuario de eliminacion
            //$table->timestamps();
        });
        Schema::create('tariffheadings', function (Blueprint $table) {
            $table->id();
            $table->string('tariff_heading', 50); // Partida Arancelaria 
            $table->string('description', 50); // Descripcion
            
            $table->timestamp('created_date'); //Fecha de creacion
            $table->timestamp('updated_date')->nullable(); //Fecha de Modificacion 
            $table->timestamp('deleted_date')->nullable(); //Fecha de eliminacion
            $table->integer('created_user')->nullable(); //Usuario de creacion
            $table->integer('updated_user')->nullable(); //Usuario de modificacion
            $table->integer('deleted_user')->nullable(); //Usuario de eliminacion
            //$table->timestamps();
        });
        
        Schema::create('supplies', function (Blueprint $table) {
            $table->id();
            $table->string('input_code', 100); // Codigo del insumo I000
            $table->string('description', 100); // Descripcion
            
            $table->unsignedBigInteger('measurement_id');
            $table->foreign('measurement_id')->references('id')->on('measurements');
            
            $table->unsignedBigInteger('tariffheading_id');
            $table->foreign('tariffheading_id')->references('id')->on('tariffheadings');
            
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
        Schema::dropIfExists('supplies');
        Schema::dropIfExists('tariffheadings');
        Schema::dropIfExists('measurements');
        
    }
}
