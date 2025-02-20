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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('empresa')->nullable();
            $table->string('cnpj')->nullable();
            $table->string('password')->nullable();
            $table->string('tags')->nullable();
            $table->boolean('cliente')->default(0);
            $table->string('tipo_interacao')->nullable();
            $table->timestamp('data_interacao')->nullable();
            $table->text('descricao_interacao')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
