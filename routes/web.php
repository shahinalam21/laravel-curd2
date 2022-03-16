<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Crud2Controller;

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

Route::get('/',[Crud2Controller::class,'index']);
Route::get('/crud2/insert',[Crud2Controller::class,'create']);
Route::post('/crud2/store',[Crud2Controller::class,'store']);
Route::get('/crud2/edit/{id}',[Crud2Controller::class,'edit']);
Route::post('/crud2/update/{id}',[Crud2Controller::class,'update']);
Route::get('/crud2/show/{id}',[Crud2Controller::class,'show']);
Route::get('/crud2/destroy/{id}',[Crud2Controller::class,'destroy']);
