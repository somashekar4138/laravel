<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\samplecontroller;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/sample', function(){
    return view('my');
});
Route::get('/show',[samplecontroller::class, 'show']);
Route::get('/para/{data}',[samplecontroller::class, 'para']);
Route::get('/parawd/{data}',function($data){
    return view("para",["data"=>$data]);
});
Route::get('/parawdef/{data?}',function($data="Praneeth"){
    return view("def",["data"=>$data]);
});
