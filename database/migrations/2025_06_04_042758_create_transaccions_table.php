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
    Schema::create('transacciones', function (Blueprint $table) {
        $table->id();
        $table->enum('tipo', ['ingreso', 'gasto']);
        $table->decimal('monto', 12, 2);
        $table->text('descripcion')->nullable();
        $table->date('fecha');
        $table->string('moneda', 5);
        $table->foreignId('categoria_id')->constrained('categorias')->onDelete('cascade');
        $table->foreignId('user_id')->constrained()->onDelete('cascade');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaccions');
    }
};
