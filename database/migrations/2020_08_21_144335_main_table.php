<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MainTable extends Migration
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

// ESTU_GENERO, ESTU_FECHANACIMIENTO, PERIODO, ESTU_CONSECUTIVO, ESTU_PAIS_RESIDE, ESTU_DEPTO_RESIDE, ESTU_COD_RESIDE_DEPTO, ESTU_MCPIO_RESIDE, ESTU_COD_RESIDE_MCPIO, INST_COD_INSTITUCION, INST_NOMBRE_INSTITUCION, ESTU_PRGM_ACADEMICO, ESTU_SNIES_PRGMACADEMICO, GRUPOREFERENCIA, MOD_RAZONA_CUANTITAT_PUNT, MOD_RAZONA_CUANTITAT_DESEM, MOD_RAZONA_CUANTITATIVO_PNAL, MOD_RAZONA_CUANTITATIVO_PGREF, MOD_LECTURA_CRITICA_PUNT, MOD_LECTURA_CRITICA_DESEM, MOD_LECTURA_CRITICA_PNAL, MOD_LECTURA_CRITICA_PGREF, MOD_COMPETEN_CIUDADA_PUNT, MOD_COMPETEN_CIUDADA_DESEM, MOD_COMPETEN_CIUDADA_PNAL, MOD_COMPETEN_CIUDADA_PGREF, MOD_INGLES_PUNT, MOD_INGLES_PNAL, MOD_INGLES_PGREF, MOD_COMUNI_ESCRITA_PUNT, MOD_COMUNI_ESCRITA_DESEM, MOD_COMUNI_ESCRITA_PNAL, MOD_COMUNI_ESCRITA_PGREF, PUNT_GLOBAL, PERCENTIL_GLOBAL

