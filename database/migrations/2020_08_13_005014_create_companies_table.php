<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('business_name', 100); //Razon Social
            $table->string('direction', 100); //Direccion
            $table->string('city', 100); //Ciudad
            $table->string('state', 50); //Departamento
            $table->string('phone', 50); // Telefono
            $table->string('activity', 100); //Actividad
            $table->string('legal_representative', 100); // Representante Legal
            $table->string('dni', 50); //Carnet de Identidad
            $table->string('issued', 50); // Expedido
            $table->string('email', 50); // Correo Electronico
            $table->string('ruex_number', 100); //Nro Ruex
            $table->string('enrollment_number', 100); //Nro Matricula
            $table->string('nit_number', 100); // Nro NIT
            //$table->string('mining_sector', 20); // Sector Minero
            //$table->string('ritex_type', 20); // Tipo de Ritex
            //$table->boolean('tax')->default(0); //Impuestos Nacionales, flag del servicio de adeudos tributarios
            //$table->boolean('national_custom')->default(0); // Aduana Nacional, flag del servicio de adeudos tributarios

            $table->timestamp('created_date'); //Fecha de creacion
            $table->timestamp('updated_date')->nullable(); //Fecha de Modificacion 
            $table->timestamp('deleted_date')->nullable(); //Fecha de eliminacion
            $table->integer('updated_user')->nullable(); //Usuario de modificacion
            $table->integer('deleted_user')->nullable(); //Usuario de eliminacion
            $table->timestamp('enable_date')->nullable(); // Fecha de habilitacion
            $table->timestamp('reject_date')->nullable(); // Fecha de rechazo
            $table->integer('enable_reject_user')->nullable(); //Usuario de Habilitacion/rechazo
            
            //$table->unsignedBigInteger('user_id');
            //$table->foreign('user_id')->references('id')->on('users');
            
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
        Schema::dropIfExists('companies');
    }
}
