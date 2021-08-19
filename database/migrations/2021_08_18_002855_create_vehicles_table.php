<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Placa
     * Renavam
     * Modelo
     * Marca
     * Ano
     * Proprietário
     */

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->integer('id',11)->unique();
            $table->string('plate', 7);
            $table->integer('renown');
            $table->string('model_car', 150);
            $table->string('brand_car', 150);
            $table->integer('year');
            $table->biginteger('id_owner')->unsigned();
            $table->foreign('id_owner')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('vehicles');
    }
}
