<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masterTable', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';

            $table->string('ESTU_GENERO');
            $table->string('ESTU_FECHANACIMIENTO');
            $table->string('PERIODO');
            $table->string('ESTU_CONSECUTIVO');
            $table->string('ESTU_PAIS_RESIDE');
            $table->string('ESTU_DEPTO_RESIDE');
            $table->string('ESTU_COD_RESIDE_DEPTO');
            $table->string('ESTU_MCPIO_RESIDE');
            $table->string('ESTU_COD_RESIDE_MCPIO');
            $table->string('INST_COD_INSTITUCION');
            $table->string('INST_NOMBRE_INSTITUCION');
            $table->string('ESTU_PRGM_ACADEMICO');
            $table->string('ESTU_SNIES_PRGMACADEMICO');
            $table->string('GRUPOREFERENCIA');
            $table->integer('MOD_RAZONA_CUANTITAT_PUNT');
            $table->integer('MOD_RAZONA_CUANTITAT_DESEM');
            $table->integer('MOD_RAZONA_CUANTITATIVO_PNAL');
            $table->integer('MOD_RAZONA_CUANTITATIVO_PGREF');
            $table->integer('MOD_LECTURA_CRITICA_PUNT');
            $table->integer('MOD_LECTURA_CRITICA_DESEM');
            $table->integer('MOD_LECTURA_CRITICA_PNAL');
            $table->integer('MOD_LECTURA_CRITICA_PGREF');
            $table->integer('MOD_COMPETEN_CIUDADA_PUNT');
            $table->integer('MOD_COMPETEN_CIUDADA_DESEM');
            $table->integer('MOD_COMPETEN_CIUDADA_PNAL');
            $table->integer('MOD_COMPETEN_CIUDADA_PGREF');
            $table->integer('MOD_INGLES_PUNT');
            $table->integer('MOD_INGLES_PNAL');
            $table->integer('MOD_INGLES_PGREF');
            $table->integer('MOD_COMUNI_ESCRITA_PUNT');
            $table->integer('MOD_COMUNI_ESCRITA_DESEM');
            $table->integer('MOD_COMUNI_ESCRITA_PNAL');
            $table->integer('MOD_COMUNI_ESCRITA_PGREF');
            $table->integer('PUNT_GLOBAL');
            $table->integer('PERCENTIL_GLOBAL');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('masterTable');
    }
}
