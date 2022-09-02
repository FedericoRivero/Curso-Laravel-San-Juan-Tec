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
        Schema::create('gastos', function (Blueprint $table) {
            $table->id();
            $table->string('detalle', 255);
            $table->float('importe');
            $table->date('fecha')->nullable();
            $table->timestamps();

            $table->unsignedBigInteger('categoria_id')->nullable();
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('set null');

            $table->unsignedBigInteger('pago_id')->nullable();
            $table->foreign('pago_id')->references('id')->on('pagos')->onDelete('set null');

            $table->unsignedBigInteger('perfiles_id')->nullable();
            $table->foreign('perfiles_id')->references('id')->on('perfiles')->onDelete('set null');
            // $table->foreignId('categoria_id')->nullable()->constrained('categorias')->cascadeOnUpdate()->nullOnDelete();
            // $table->foreignId('pago_id')->nullable()->constrained('pagos')->cascadeOnUpdate()->nullOnDelete();
            $table->boolean('fijo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gastos');
    }
};
