<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcessos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Processos', function (Blueprint $table) {
            $table->id('ProcessoID');
            $table->integer('ClienteCodigo');
            $table->integer('DespachanteID');
            $table->integer('TerminalAtracacaoID');
            $table->integer('NumeroProcesso');
            $table->integer('NumeroDI');
            $table->date('DataDI');
            $table->date('DataLI');
            $table->date('DataDesembaraco');
            $table->date('DataEntrega');
            $table->date('DataFechamento');
            $table->boolean('Ativo')->default(true);
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
        Schema::dropIfExists('Processos');
    }
}
