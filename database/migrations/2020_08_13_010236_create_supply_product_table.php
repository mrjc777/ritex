<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplyProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supply_product', function (Blueprint $table) {
            $table->id();
            $table->string('input_coefficient', 100); // Coeficiente de insumo
            $table->string('waste', 100); // Porcentaje de desperdicio
            $table->string('surplus', 100); // porcentaje de sobrante
            
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');
            
            $table->unsignedBigInteger('supplie_id');
            $table->foreign('supplie_id')->references('id')->on('supplies');
            
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
        Schema::dropIfExists('supply_product');
    }
}
