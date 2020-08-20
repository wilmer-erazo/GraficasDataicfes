<?php

namespace App\Http\Controllers;

use App\genericas2016;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dataBaseController extends Controller
{
    public function index( ){
        $generica  = genericas2016::all();
    }

    public function consultaGenericaPosicionRegion(Request $request){
        $response = DB::select('SELECT INST_NOMBRE_INSTITUCION as INSTITUCION, AVG('.$request->modulo.') as PROMEDIO FROM genericas'.$request->tiempo.' WHERE PERIODO='.$request->tiempo.''.$request->periodo.' AND ESTU_DEPTO_RESIDE = '.$request->region.' GROUP BY INST_NOMBRE_INSTITUCION ORDER BY AVG('.$request->modulo.') DESC limit 0, 10');
        return response()->json(
            array(
                "response"=> $response,
            ),
                200
        );

    public function consultaGenericaPosicion(Request $request){
        $response = DB::select('SELECT INST_NOMBRE_INSTITUCION as INSTITUCION, AVG('.$request->modulo.') as PROMEDIO FROM '.$request->tiempo.' GROUP BY INST_NOMBRE_INSTITUCION ORDER BY AVG('.$request->modulo.') DESC limit 0, 10');
        return response()->json(
            array(
                "response"=> $response,
            ),
                200
        );


    }
}
