<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diarios', function (Blueprint $table) {
            $table->id();
            $table->string('dataobra',300);
            $table->string('numero_relatorio',300);
            $table->string('unidade',300);
            $table->string('nome_cliente',300);
            $table->string('local_obra',300);
            $table->string('clima',300);
            $table->string('numero_contrato',300);
            $table->string('descricao',300);
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
        Schema::dropIfExists('diarios');
    }
}
