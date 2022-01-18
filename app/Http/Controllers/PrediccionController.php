<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prediccion;

class PrediccionController extends Controller
{
    public function findByCity (Request $request)
    {   
        $prediccion=new Prediccion();
        $apiEndPoint="http://api.weatherapi.com/v1/";
        $tipo="search.json?";
        $clave="key="."68f49f4f896943de89c214326221101"."&";
        $parametro="q=";
        $aqi="&aqi=no";
        $ciudad=$request->input('ciudad');
        $url=$apiEndPoint.$tipo.$clave.$parametro.$ciudad.$aqi;
        $datos=$prediccion->findByCity($url);
        $datos=json_decode($datos);

       return view('index',compact('datos'));
    }
}
