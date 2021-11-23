<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();

            // $table->BigInteger('veiculo_id')->unsigned();
            $table->foreignId('veiculo_id')->constrained('vehicles');
                    // ->references('id')
                    //     ->on('vehicles');

            // $table->BigInteger('cliente_id')->unsigned();
            $table->foreignId('cliente_id')->constrained('clients');
                    // ->references('id')
                    //     ->on('clients');
            $table->float('valor');
            $table->date('inicio');
            $table->date('final');
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
        Schema::dropIfExists('produtos');
    }
}
