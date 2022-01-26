<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontControlloer extends Controller
{
    //
    public function index(){
        return view('index');
    }  

    public function hellooo(){
            // $box = 1;
            // if($box == 0){
            //     dd('123');
            // }elseif($box == 1){   //elseif 跟JS的差別:單字連在一起了
            //     dd('456');
            // }else{
            //     dd('789');
            // }
            $num1 = 2;
            $num2 = 5;
            // dd($box ?? '123');
            dd($num1,$num2);
            return "hahaha";
    }
}
