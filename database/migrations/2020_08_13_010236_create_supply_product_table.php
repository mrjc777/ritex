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
        Schema::dropIfExists('supply_product');
    }
}
