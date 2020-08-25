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
        Schema::dropIfExists('supplies');
    }
}
