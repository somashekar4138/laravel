<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\samplecontroller;
use App\Http\Controllers\userController;
use App\Models\Article;
use App\Models\employees;


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
Route::get('/view',function($data){
    return view('welcome');
});
Route::get('/create',function(){
    return view('create');
});
Route::post('/create',function(){
    $article = new Article();
    $article->title = request('title');
    $article->body = request('body');
    $article->save();
});
Route::get('/form',function(){
    return view('form');
});
Route::post('/form',function(){
    $article = new Article();
    $article->name = request('Name');
    $article->phone = request('Phone');
    $article->email = request('Email');
    $article->language = request('language');
    $article->gender = request('Gender');
    $article->decription = request('Description');
    $article->file_path = request('file');
    $article->save();
});
Route::get("/main",[userController::class,'index']);

