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

    public function consultaGenericaPosicionRegion(Request $request){
        $response = DB::select('SELECT INST_NOMBRE_INSTITUCION as INSTITUCION, AVG('.$request->modulo.') as PROMEDIO FROM '.$request->tiempo.' WHERE ESTU_DEPTO_RESIDE = '.$request->region.' GROUP BY INST_NOMBRE_INSTITUCION ORDER BY AVG('.$request->modulo.') DESC limit 0, 10');
        return response()->json(
            array(
                "response"=> $response,
            ),
                200
        );

    public function consultaGenericaPosicion(Request $request){
<<<<<<< HEAD
        $universidadesQuery = $this->institucionesQuery($request->universidades);
        $tablas = $request->tabla;
        $temporal = "genericas2016";
        $query = 'SELECT INST_NOMBRE_INSTITUCION as INSTITUCION, INST_COD_INSTITUCION as CODIGO, AVG('.$request->modulo.') as PROMEDIO FROM '.$temporal. $universidadesQuery.' GROUP BY INST_NOMBRE_INSTITUCION,CODIGO ORDER BY INSTITUCION';
        $response = DB::select($query);

=======
        $response = DB::select('SELECT INST_NOMBRE_INSTITUCION as INSTITUCION, AVG('.$request->modulo.') as PROMEDIO FROM '.$request->tiempo.' GROUP BY INST_NOMBRE_INSTITUCION ORDER BY AVG('.$request->modulo.') DESC limit 0, 10');
>>>>>>> ae52a187891cfd21e7d859fd8edf94cfbc14746c
        return response()->json(
            array(
                "response"=> $response
            ),
                200
        );
    }



    public function obtenerInstituciones(Request $request){
        $response = DB::select('SELECT DISTINCT(INST_NOMBRE_INSTITUCION), INST_COD_INSTITUCION FROM genericas2016');
        return response()->json(
            array(
                "response"=> $response
            ),
                200
        );
    }


}
