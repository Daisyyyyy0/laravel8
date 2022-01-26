<?php

use App\Http\Controllers\FrontControlloer;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [FrontControlloer::class,'index']);
// Route::get('/', 'FrontControlloer@index');   這個用法不能用了

Route::get('/hellooo', [FrontControlloer::class, 'hellooo']);















Route::get('/hello/{number}/{b}', function ($number1,$number2) {

    // $box = 1;
    // if($box == 0){
    //     dd('123');
    // }elseif($box == 1){   //elseif 跟JS的差別:單字連在一起了
    //     dd('456');
    // }else{
    //     dd('789');
    // }
    // dd($box ?? '123');
    dd($number1,$number2);
    return "hahaha";
});

Route::get('/index/{id}', function ($id) {
    $name = 'Daisy';
    $age = 18;
    $gender = 'female';

    // dd(compact('name','age','gender'));
    return view('index',compact('name','age','gender','id'));
});