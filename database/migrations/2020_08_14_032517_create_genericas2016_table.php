<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenericas2016Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genericas2016', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';

            $table->string('ESTU_GENERO');
            $table->string('ESTU_FECHANACIMIENTO');
            $table->string('PERIODO');
            $table->string('ESTU_CONSECUTIVO');
            $table->string('ESTU_PAIS_RESIDE');
            $table->string('ESTU_DEPTO_RESIDE');
            $table->string('ESTU_MCPIO_RESIDE');
            $table->string('ESTU_AREARESIDE');
            $table->string('ESTU_TITULOOBTENIDOBACHILLER');
            $table->string('ESTU_COLE_TERMINO');
            $table->string('ESTU_CODDANE_COLE_TERMINO');
            $table->integer('ESTU_VALORMATRICULAUNIVERSIDAD');
            $table->string('ESTU_PAGOMATRICULABECA');
            $table->string('ESTU_PAGOMATRICULACREDITO');
            $table->string('ESTU_PAGOMATRICULAPROPIO');
            $table->string('ESTU_COMOCAPACITOEXAMENSB11');
            $table->string('ESTU_TIPODOCUMENTOSB11');
            $table->string('ESTU_SEMESTRECURSA');
            $table->integer('FAMI_NUMPERSONASACARGO');
            $table->string('FAMI_ESTRATOVIVIENDA');
            $table->string('INST_COD_INSTITUCION');
            $table->string('INST_NOMBRE_INSTITUCION');
            $table->string('ESTU_PRGM_ACADEMICO');
            $table->string('ESTU_SNIES_PRGMACADEMICO');
            $table->string('GRUPOREFERENCIA');
            $table->string('ESTU_NIVEL_PRGM_ACADEMICO');
            $table->string('ESTU_METODO_PRGM');
            $table->string('ESTU_NUCLEO_PREGRADO');
            $table->string('INST_CARACTER_ACADEMICO');
            $table->string('INST_ORIGEN');
            $table->string('ESTU_MCPIO_PRESENTACION');
            $table->string('ESTU_DEPTO_PRESENTACION');
            $table->decimal('MOD_RAZONA_CUANTITAT_PUNT',20,0);
            $table->decimal('MOD_RAZONA_CUANTITAT_DESEM',20,0);
            $table->decimal('MOD_RAZONA_CUANTITATIVO_PNAL',20,0);
            $table->decimal('MOD_RAZONA_CUANTITATIVO_PGREF',20,0);
            $table->decimal('MOD_LECTURA_CRITICA_PUNT',20,0);
            $table->decimal('MOD_LECTURA_CRITICA_DESEM',20,0);
            $table->decimal('MOD_LECTURA_CRITICA_PNAL',20,0);
            $table->decimal('MOD_LECTURA_CRITICA_PGREF',20,0);
            $table->decimal('MOD_COMPETEN_CIUDADA_PUNT',20,0);
            $table->decimal('MOD_COMPETEN_CIUDADA_DESEM',20,0);
            $table->decimal('MOD_COMPETEN_CIUDADA_PNAL',20,0);
            $table->decimal('MOD_COMPETEN_CIUDADA_PGREF',20,0);
            $table->decimal('MOD_INGLES_PUNT',20,0);
            $table->decimal('MOD_INGLES_DESEM',20,0);
            $table->decimal('MOD_INGLES_PNAL',20,0);
            $table->decimal('MOD_INGLES_PGREF',20,0);
            $table->decimal('MOD_COMUNI_ESCRITA_PUNT',20,0);
            $table->decimal('MOD_COMUNI_ESCRITA_DESEM',20,0);
            $table->decimal('MOD_COMUNI_ESCRITA_PNAL',20,0);
            $table->decimal('MOD_COMUNI_ESCRITA_PGREF',20,0);
            $table->decimal('PUNT_GLOBAL',20,0);
            $table->decimal('PERCENTIL_GLOBAL',20,0);
            $table->string('ESTU_INSE_INDIVIDUAL');
            $table->string('ESTU_NSE_INDIVIDUAL');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('genericas2016');
    }
}
