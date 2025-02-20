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
        Schema::create('registros', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Adicionando a coluna user_id
            $table->foreign('user_id')->references('id')->on('users'); // Definindo a chave estrangeira
            $table->string('tipo_interacao');
            $table->timestamp('data_interacao')->nullable();
            $table->text('descricao_interacao');
            $table->timestamps();
        });
        Schema::table('registros', function (Blueprint $table) {
            $table->index('user_id');
    });

    

}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registros');
    }
};
