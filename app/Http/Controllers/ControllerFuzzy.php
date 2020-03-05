<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\keputusan;

class ControllerFuzzy extends Controller
{
    //

    public function index(Request $request){
        $suhu = $request->suhu;
        
        $status['suhu'] = array();
        $status['kekeruhan'] = array();
        $status['ph'] = array();
        
        //Fuzzyfikasi suhu
        if($suhu <= 26){
            $status['suhu'] = [1,0,0];
        }elseif(($suhu > 26) && ($suhu <= 32)){
            $status['suhu'] = [0,1,0];
        }elseif($suhu > 32){
            $status['suhu'] = [0,0,1];
        }
        $kekeruhan = $request->kekeruhan;
        //Fuzzyfikasi kekeruhan
        if(($kekeruhan >= 0) && ($kekeruhan <= 250)){
            $status['kekeruhan'] = [0,1,0];
        }elseif(($kekeruhan > 250) && ($kekeruhan <= 450)){
            $status['kekeruhan'] = [1,0,0];
        }elseif($kekeruhan > 650){
            $status['kekeruhan'] = [0,0,1];
        }
        $ph = $request->ph;
        //Fuzzyfikasi ph
        if($ph <= 6){
            $status['ph'] = [1,0,0];
        }elseif(($ph > 6) && ($ph <= 8)){
            $status['ph'] = [0,1,0];
        }elseif($ph > 8){
            $status['ph'] = [0,0,1];
        }

        DB::table('keputusan')->insert(
            ['suhu' => $request->suhu, 
             'kekeruhan' => $request->kekeruhan,
             'ph' => $request->ph
            ]
        );

        $i = 0;
        $x = 0;
        $z = 0;
        $rule = array();
        for($x = 0; $x < count($status['suhu']); $x++){
            for($i = 0; $i < count($status['suhu']); $i++){
                $rule[$z] = min($status['suhu'][$i], $status['kekeruhan'][$x]);
                $z = $z+1;
            }
        }
        for($x = 0; $x < count($status['ph']); $x++){
            for($i = 0; $i < count($status['ph']); $i++){
                $rule[$z] = min($status['suhu'][$i], $status['ph'][$x]);
                $z = $z+1;
            }
        }
        for($x = 0; $x < count($status['kekeruhan']); $x++){
            for($i = 0; $i < count($status['kekeruhan']); $i++){
                $rule[$z] = min($status['kekeruhan'][$i], $status['ph'][$x]);
                $z = $z+1;
            }
        }
        $rules = [0,1,2];
        $w = 0;
        $counter = 0;
        $div = 0;
        for($a = 0;$a<27;$a++){
            if($counter > 2){
                $counter = 0;
             }
            $w = $w + ($rules[$counter]*$rule[$a]);
            
            $counter = $counter + 1;
        }
        for($a = 0; $a < 27; $a++){
            $div = $div+$rule[$a];
        }
        $val = $w/$div;
        //return json_encode($rule);
        return json_encode($val);
    
    }

    public function test(Request $request){

        return response()->json([
            'status' => '200',
            'data' => $request->input('data')
        ]);
    }

    public function getData(Request $request){

        $data = DB::table('keputusan')
        ->orderby('id','DESC')
        ->get();
        $data['token'] =  $request->input('token');
        
        return $data;
    }
}
