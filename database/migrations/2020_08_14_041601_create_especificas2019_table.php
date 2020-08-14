<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEspecificas2019Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('especificas2019', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';

            $table->string('ESTU_CONSECUTIVO');
            $table->string('RESULT_CODIGOPRUEBA');
            $table->string('RESULT_NOMBREPRUEBA');
            $table->decimal('RESULT_PUNTAJE', 5, 0);
            $table->decimal('RESULT_DESEMPENO', 2, 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('especificas2019');
    }
}
