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
        Schema::create('aire_acondicionados', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aire_acondicionados');
        Schema::create('aire_acondicionados', function (Blueprint $table) {
    $table->id();
    $table->string('identificacion');
    $table->string('estado');
    $table->string('marca_modelo');
    $table->foreignId('aula_id')->constrained()->onDelete('cascade');
    $table->timestamps();
});

    }
};
