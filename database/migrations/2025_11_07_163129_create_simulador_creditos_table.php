<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('simulador_creditos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('mes', 20);
            $table->decimal('cuota', 100, 2);
            $table->decimal('intereses', 100, 2);
            $table->decimal('capital', 1000000, 2);
            $table->decimal('saldopendiente', 1000000, 2);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('simulador_creditos');
    }
};
