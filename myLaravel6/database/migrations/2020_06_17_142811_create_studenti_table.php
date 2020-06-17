<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studenti', function (Blueprint $table) {
            $table->id();

            $table->string('nome');
            $table->string('cognome');
            $table->string('email');
            $table->date('data_di_nascita');
            $table->string('numero_telefono');
            $table->string('indirizzo');
            $table->string('tipo_carta_di_credito');
            $table->string('numero_carta_di_credito');

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
        Schema::dropIfExists('studenti');
    }
}
