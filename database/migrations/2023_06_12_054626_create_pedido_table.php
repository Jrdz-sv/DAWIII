<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pedido', function (Blueprint $table) {
            $table->id('Id_Pedido');
            $table->dateTime('FechaPedido');
            $table->dateTime('FechaEntrega');
            $table->string('Observaciones', 150);
            $table->bigInteger('Id_cliente')->unsigned();

            $table->foreign('Id_cliente')->references('Id_Cliente')->on('cliente')->onDelete('cascade')->onUpdate('cascade'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedido');
    }
};
