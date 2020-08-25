<?php

namespace App\Http\Controllers;

use App\genericas2016;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\This;

class dataBaseController extends Controller
{
    function institucionesQuery($universidades){
        $universidadesQuery =' ';
        if (is_null($universidades) == false) {
            $universidadesQuery = 'INST_COD_INSTITUCION IN ('.$universidades[0];
            for ($i=1; $i < count($universidades); $i++) {
                $universidadesQuery = $universidadesQuery.', '. $universidades[$i];
            }
            $universidadesQuery = $universidadesQuery.' )';
        }
        return $universidadesQuery;
    }

    function yearsQuery($years){
        $yearsQuery =' ';
        if (is_null($years) == false) {
            $yearsQuery = '(PERIODO LIKE "'.$years[0] . '%"';
            for ($i=1; $i < count($years); $i++) {
                $yearsQuery =$yearsQuery. ' OR PERIODO LIKE "'.$years[$i] . '%"';
            }
        }
        $yearsQuery =$yearsQuery. ')';
        return $yearsQuery;
    }

    public function controladorDeFiltros(Request $request){
        $index = "null";
        $whereQuery = 'WHERE ';
        if( $request->departamento != "null"){
            if( $request->municipio != "null"){
                $whereQuery = $whereQuery.'ESTU_COD_RESIDE_MCPIO = '.$request->municipio;
            }
            else{
                $whereQuery = $whereQuery.'ESTU_COD_RESIDE_DEPTO = '.$request->departamento;

            }
            $index = "entro";
        }
        if (is_null($request->universidades) == false) {
            if ($index != "null"){
                $whereQuery =  $whereQuery.' AND ';
            }
            $whereQuery =  $whereQuery. $this->institucionesQuery($request->universidades);
            $index = "entro";
        }
        if (is_null($request->year) == false) {
            if ($index != "null"){
                $whereQuery =  $whereQuery.' AND ';
            }
            $whereQuery =  $whereQuery.$this->yearsQuery($request->year);
            $index = "entro";
        }
        if ($index != "null"){
            return $whereQuery;
        }
        else{
            return "";
        }
    }

    public function consultaGenericaPosicion(Request $request){
        $whereQuery = $this->controladorDeFiltros($request);
        $query = 'SELECT INST_NOMBRE_INSTITUCION as INSTITUCION, INST_COD_INSTITUCION as CODIGO, AVG('.$request->modulo.') as PROMEDIO FROM MASTERTABLE '. $whereQuery. ' GROUP BY INST_NOMBRE_INSTITUCION,CODIGO ORDER BY INSTITUCION';
        $response = DB::select($query);
        return response()->json(
            array(
                "response"=> $response
            ),
                200
        );
    }



    public function obtenerInstituciones(Request $request){

        $instituciones = DB::select('SELECT DISTINCT(INST_NOMBRE_INSTITUCION), INST_COD_INSTITUCION FROM mastertable');
        $departamentos = DB::select('SELECT DISTINCT(ESTU_DEPTO_RESIDE), ESTU_COD_RESIDE_DEPTO FROM mastertable');

        return response()->json(
            array(
                "instituciones"=> $instituciones,
                "departamentos"=> $departamentos
            ),
                200
        );
    }

    public function obtenerMunicipio(Request $request){
        $municipios = DB::select('SELECT DISTINCT(ESTU_MCPIO_RESIDE), ESTU_COD_RESIDE_MCPIO FROM mastertable where ESTU_COD_RESIDE_DEPTO = '.$request->deptartamento);

        return response()->json(
            array(
                "municipios"=> $municipios
            ),
                200
        );
    }
}
