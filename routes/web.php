<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('id', function () {
    $test = DB::table('test')->get();
    return $test;
});

Route::get('/id/{id}', function (Request $request, $id) {
    $test = DB::select('select * from test where test1 = ? ;', [strval($id)]);
    return $test;

});


Route::post('/id', function($request = null) {
	DB::insert('insert into test(test1,test2) values (?,?)', ['12','Laravel']);	
   
});


Route::get('/token', function () {
    return csrf_token(); 
});
