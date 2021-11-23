<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            // nome, CPF, CNH, endereço, cartão de crédito
            $table->string('nome');
            $table->string('cpf')->unique();
            $table->string('cnh')->unique();
            $table->string('endereco');
            $table->string('cartao')->unique();
            $table->tinyInteger('status');
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
        Schema::dropIfExists('clients');
        
    }
}
