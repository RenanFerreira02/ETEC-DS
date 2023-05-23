<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tbReclamacao', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('idLab');
            $table->foreign('idLab')->references('id')->on('tbLaboratorio')->onDelete('cascade');

            $table->integer('pc');
            $table->string('titulo', 300);
            $table->string('descricao', 600);
            $table->date('dtCriacao');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbReclamacoes');
    }
};
