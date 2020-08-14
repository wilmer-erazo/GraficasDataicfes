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

    public function consultaGenericaPosicion(Request $request){
        $response = DB::select('SELECT INST_NOMBRE_INSTITUCION as INSTITUCION, AVG('.$request->modulo.') as PROMEDIO FROM '.$request->tiempo.' GROUP BY INST_NOMBRE_INSTITUCION ORDER BY AVG('.$request->modulo.')');
        return response()->json(
            array(
                "response"=> $response,
            ),
                200
        );


    }
}
