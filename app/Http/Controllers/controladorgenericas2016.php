<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\genericas2016;
use App\Http\Requests;

class controladorgenericas2016 extends Controller
{
	public function index(Request $request){
		return view('vistagenericas2016');
	}
    //
	public function vista(Request $request){
		return view('vistagenericas2016');
	}

	public function create(Request $request){

		$generica = new genericas2016();

		$generica -> ESTU_GENERO = $request -> ESTU_GENERO;
		$generica -> ESTU_FECHANACIMIENTO = $request -> ESTU_FECHANACIMIENTO;
		$generica -> PERIODO = $request -> PERIODO;
		$generica -> ESTU_CONSECUTIVO = $request -> ESTU_CONSECUTIVO;
		$generica -> ESTU_PAIS_RESIDE = $request -> ESTU_PAIS_RESIDE;
		$generica -> ESTU_DEPTO_RESIDE = $request -> ESTU_DEPTO_RESIDE;
		$generica -> ESTU_MCPIO_RESIDE = $request -> ESTU_MCPIO_RESIDE;
		$generica -> ESTU_AREARESIDE = $request -> ESTU_AREARESIDE;
		$generica -> ESTU_TITULOOBTENIDOBACHILLER = $request -> ESTU_TITULOOBTENIDOBACHILLER;
		$generica -> ESTU_COLE_TERMINO = $request -> ESTU_COLE_TERMINO;
		$generica -> ESTU_CODDANE_COLE_TERMINO = $request -> ESTU_CODDANE_COLE_TERMINO;
		$generica -> ESTU_VALORMATRICULAUNIVERSIDAD = $request -> ESTU_VALORMATRICULAUNIVERSIDAD;
		$generica -> ESTU_PAGOMATRICULABECA = $request -> ESTU_PAGOMATRICULABECA;
		$generica -> ESTU_PAGOMATRICULACREDITO = $request -> ESTU_PAGOMATRICULACREDITO;
		$generica -> ESTU_PAGOMATRICULAPROPIO = $request -> ESTU_PAGOMATRICULAPROPIO;
		$generica -> ESTU_COMOCAPACITOEXAMENSB11 = $request -> ESTU_COMOCAPACITOEXAMENSB11;
		$generica -> ESTU_TIPODOCUMENTOSB11 = $request -> ESTU_TIPODOCUMENTOSB11;
		$generica -> ESTU_SEMESTRECURSA = $request -> ESTU_SEMESTRECURSA;
		$generica -> FAMI_NUMPERSONASACARGO = $request -> FAMI_NUMPERSONASACARGO;
		$generica -> FAMI_ESTRATOVIVIENDA = $request -> FAMI_ESTRATOVIVIENDA;
		$generica -> INST_COD_INSTITUCION = $request -> INST_COD_INSTITUCION;
		$generica -> INST_NOMBRE_INSTITUCION = $request -> INST_NOMBRE_INSTITUCION;
		$generica -> ESTU_PRGM_ACADEMICO = $request -> ESTU_PRGM_ACADEMICO;
		$generica -> ESTU_SNIES_PRGMACADEMICO = $request -> ESTU_SNIES_PRGMACADEMICO;
		$generica -> GRUPOREFERENCIA = $request -> GRUPOREFERENCIA;
		$generica -> ESTU_NIVEL_PRGM_ACADEMICO = $request -> ESTU_NIVEL_PRGM_ACADEMICO;
		$generica -> ESTU_METODO_PRGM = $request -> ESTU_METODO_PRGM;
		$generica -> ESTU_NUCLEO_PREGRADO = $request -> ESTU_NUCLEO_PREGRADO;
		$generica -> INST_CARACTER_ACADEMICO = $request -> INST_CARACTER_ACADEMICO;
		$generica -> INST_ORIGEN = $request -> INST_ORIGEN;
		$generica -> ESTU_MCPIO_PRESENTACION = $request -> ESTU_MCPIO_PRESENTACION;
		$generica -> ESTU_DEPTO_PRESENTACION = $request -> ESTU_DEPTO_PRESENTACION;
		$generica -> MOD_RAZONA_CUANTITAT_PUNT = $request -> MOD_RAZONA_CUANTITAT_PUNT;
		$generica -> MOD_RAZONA_CUANTITAT_DESEM = $request -> MOD_RAZONA_CUANTITAT_DESEM;
		$generica -> MOD_RAZONA_CUANTITATIVO_PNAL = $request -> MOD_RAZONA_CUANTITATIVO_PNAL;
		$generica -> MOD_RAZONA_CUANTITATIVO_PGREF = $request -> MOD_RAZONA_CUANTITATIVO_PGREF;
		$generica -> MOD_LECTURA_CRITICA_PUNT = $request -> MOD_LECTURA_CRITICA_PUNT;
		$generica -> MOD_LECTURA_CRITICA_DESEM = $request -> MOD_LECTURA_CRITICA_DESEM;
		$generica -> MOD_LECTURA_CRITICA_PNAL = $request -> MOD_LECTURA_CRITICA_PNAL;
		$generica -> MOD_LECTURA_CRITICA_PGREF = $request -> MOD_LECTURA_CRITICA_PGREF;
		$generica -> MOD_COMPETEN_CIUDADA_PUNT = $request -> MOD_COMPETEN_CIUDADA_PUNT;
		$generica -> MOD_COMPETEN_CIUDADA_DESEM = $request -> MOD_COMPETEN_CIUDADA_DESEM;
		$generica -> MOD_COMPETEN_CIUDADA_PNAL = $request -> MOD_COMPETEN_CIUDADA_PNAL;
		$generica -> MOD_COMPETEN_CIUDADA_PGREF = $request -> MOD_COMPETEN_CIUDADA_PGREF;
		$generica -> MOD_INGLES_PUNT = $request -> MOD_INGLES_PUNT;
		$generica -> MOD_INGLES_DESEM = $request -> MOD_INGLES_DESEM;
		$generica -> MOD_INGLES_PNAL = $request -> MOD_INGLES_PNAL;
		$generica -> MOD_INGLES_PGREF = $request -> MOD_INGLES_PGREF;
		$generica -> MOD_COMUNI_ESCRITA_PUNT = $request -> MOD_COMUNI_ESCRITA_PUNT;
		$generica -> MOD_COMUNI_ESCRITA_DESEM = $request -> MOD_COMUNI_ESCRITA_DESEM;
		$generica -> MOD_COMUNI_ESCRITA_PNAL = $request -> MOD_COMUNI_ESCRITA_PNAL;
		$generica -> MOD_COMUNI_ESCRITA_PGREF = $request -> MOD_COMUNI_ESCRITA_PGREF;
		$generica -> PUNT_GLOBAL = $request -> PUNT_GLOBAL;
		$generica -> PERCENTIL_GLOBAL = $request -> PERCENTIL_GLOBAL;
		$generica -> ESTU_INSE_INDIVIDUAL = $request -> ESTU_INSE_INDIVIDUAL;
		$generica -> ESTU_NSE_INDIVIDUAL = $request -> ESTU_NSE_INDIVIDUAL;

		$generica -> save();

		return redirect('/create');
	}

	public function leer(Request $request){
		//$genericas=DB::table('genericas20161')->get();
		$tiempo=$_GET['tiempo'];
		$periodo=$_GET['periodo'];
	    $modulo=$_GET['modulo'];

		$genericas = DB::select('SELECT INST_NOMBRE_INSTITUCION, AVG('.$modulo.') PROMEDIO FROM genericas'.$tiempo.' WHERE PERIODO='.$tiempo.''.$periodo.' GROUP BY INST_NOMBRE_INSTITUCION ORDER BY AVG('.$modulo.') DESC limit 0, 10');

        return view(' ',['genericas2016'=>$genericas]);
	}

}
