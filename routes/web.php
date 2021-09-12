<?php


use App\Reports\MyReport;
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
    $report = new MyReport;
    $report->run();
    return view("report",["report"=>$report]);
});


Route::get('/demo1', function () { return view("demoreport1"); })->middleware('age');

Route::get('/login', function () {
    return view("login");
});


Route::group(['middleware'=>['webGroup']], function () {

    Route::get('/demo2', function () { return view("middlewaredemo2"); });

});


