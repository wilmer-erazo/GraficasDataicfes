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
            $universidadesQuery = ' WHERE INST_COD_INSTITUCION IN ('.$universidades[0];
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
            $yearsQuery = ' AND PERIODO LIKE "'.$years[0] . '%"';
            for ($i=1; $i < count($years); $i++) {
                $yearsQuery =$yearsQuery. ' OR PERIODO LIKE "'.$years[$i] . '%"';
            }
        }
        return $yearsQuery;
    }

    public function consultaGenericaPosicion(Request $request){
        $universidadesQuery = $this->institucionesQuery($request->universidades);
        $yearQuery = $this->yearsQuery($request->year);
        $tablas = $request->tabla;
        $temporal = "mastertable";
        $query = 'SELECT INST_NOMBRE_INSTITUCION as INSTITUCION, INST_COD_INSTITUCION as CODIGO, AVG('.$request->modulo.') as PROMEDIO FROM '.$temporal. $universidadesQuery. $yearQuery. ' GROUP BY INST_NOMBRE_INSTITUCION,CODIGO ORDER BY INSTITUCION';
        $response = DB::select($query);
        return response()->json(
            array(
                "response"=> $response
            ),
                200
        );
    }



    public function obtenerInstituciones(Request $request){
        $response = DB::select('SELECT DISTINCT(INST_NOMBRE_INSTITUCION), INST_COD_INSTITUCION FROM mastertable');
        return response()->json(
            array(
                "response"=> $response
            ),
                200
        );
    }


}
