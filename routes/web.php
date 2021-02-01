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
    return view('index');
});

Route::get('/train-engarenaibor', function () {
    return view('train-engarenaibor');
});

Route::get('/tingatinga', function () {
    return view('tingatinga');
});

Route::get('/train-tingatinga', function () {
    return view('train-tingatinga');
});

Route::get('/enduimet', function () {
    return view('enduimet');
});

Route::get('/longido-olevel', function () {
    return view('longido-olevel');
});

Route::get('/namanga', function () {
    return view('namanga');
});

Route::get('/arushagirls', function () {
    return view('arushagirls');
});

Route::get('/train-arusha-girls', function () {
    return view('train-arusha-girls');
});

Route::get('/bSchoolVisit/jan22', function () {
    return view('/bSchoolVisit/jan22');
});

Route::get('/bSchoolVisit/jan23', function () {
    return view('/bSchoolVisit/jan23');
});

Route::get('/bSchoolVisit/ilkidinga0102', function () {
    return view('/bSchoolVisit/ilkidinga0102');
});