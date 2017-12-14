<?php

namespace App\Http\Controllers;

use App\Temperature;
use Illuminate\Http\Request;

class TemperatureController extends Controller
{
    public function insert(Request $request){
        $this->validate($request , ['temp' => 'required']);

        $tem = new Temperature();
        $temp = $request->input('temp');
        $datetime = date('Y-m-d h:i:s a', time());

        $tem->date_registro = $datetime;
        $tem->temp = $temp;
        $tem->save();

        return response()->json(['status' => 'ok'] ,200)->header('Access-Control-Allow-Origin', '*')
            ->header('Content-Type', 'application/json');;
    }

    public function get(){
        $tem = Temperature::all();
        return response()->json($tem, 200)->header('Access-Control-Allow-Origin', '*')
            ->header('Content-Type', 'application/json');;
    }
}
