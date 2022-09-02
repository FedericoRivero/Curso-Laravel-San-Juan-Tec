<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etiquetas_gastos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('gastos_id')->nullable();
            $table->unsignedBigInteger('etiquetas_id')->nullable();

            // $table->foreign('gasto_id')->references('id')->on('gastos')->onDelete('set null');
            // $table->foreign('etiqueta_id')->references('id')->on('etiquetas')->onDelete('set null');

            $table->foreign('gastos_id')->references('id')->on('gastos');
            $table->foreign('etiquetas_id')->references('id')->on('etiquetas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etiquetas_gastos');
    }
};
