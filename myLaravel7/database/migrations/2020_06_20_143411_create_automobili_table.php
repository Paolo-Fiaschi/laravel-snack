<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutomobiliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('automobili', function (Blueprint $table) {
            $table->id();

            $table->string('marca');
            $table->integer('peso');
            $table->string('colore');
            $table->string('proprietario');
            $table->string('username');
            $table->string('pw');
            $table->integer('anno');

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
        Schema::dropIfExists('automobili');
    }
}
