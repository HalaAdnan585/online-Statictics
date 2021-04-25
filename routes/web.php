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
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('login');
});

Route::get('/test', 'PostController@index');

Route::get('/get-data', 'TestController@index');

Route::get('/login', "LoginController@login")->name('login');

Route::post('/login/checklogin', "LoginController@checkLogin");

Route::get('/register', "LoginController@register");

Route::post('/register/checkRegister', "LoginController@checkRegister");

Route::get('/email', "LoginController@email");
Route::post('/email/checkEmail', "LoginController@checkEmail");



Route::group(['middleware'=>'auth'],function (){
   Route::get('/citizen', "family__data@index");
    Route::post('/citizen', "family__data@storeCitizen");
    Route::get('/index', "family__data@indexData");

//    Route::get('/index', function () {
//        return view('index');
//    });
//
//    Route::get('/index', function () {
//        return view('index');
//    });

    Route::get('/charts1', function () {
        return view('charts1');
    });

    Route::get('/charts2', function () {
        return view('charts2');
    });

    Route::get('/confirmation', function () {
        return view('confirmation');
    });


    Route::get('/index1', function () {
        return view('index1');
    });
    Route::get('/gropTable', function () {
        return view('gropTable');
    });

    Route::get('/unregistered_Nablus', function () {
        return view('unregistered_Nablus');
    });

    Route::get('/floatChart', function () {
        return view('floatChart');
    });

    Route::get('/dateTable', function () {
        return view('dateTable');
    });

    Route::get('/unregistered_Ramallah', function () {
        return view('unregistered_Ramallah');
    });

    Route::get('/unregistered_Tulkarm', function () {
        return view('unregistered_Tulkarm');
    });

    Route::get('/unregistered_Jerusalem', function () {
        return view('unregistered_Jerusalem');
    });

    Route::get('/unregistered_Hebron', function () {
        return view('unregistered_Hebron');
    });

    Route::get('/unregistered_Bethlehem', function () {
        return view('unregistered_Bethlehem');
    });

    Route::get('/unregistered_Qalqilya', function () {
        return view('unregistered_Qalqilya'); // this is the issue
    });

    Route::get('/unregistered_salfit', function () {
        return view('unregistered_salfit');
    });

    Route::get('/unregistered_Jericho', function () {
        return view('unregistered_Jericho');
    });

    Route::get('/unregistered_Jenin', function () {
        return view('unregistered_Jenin');
    });

    Route::get('/unregistered_Tubas', function () {
        return view('unregistered_Tubas');
    });

    Route::get('/index_jenin', function () {
        return view('index_jenin');
    });

    Route::get('/index_Ramallah', function () {
        return view('index_Ramallah');
    });

    Route::get('/index_Bethlehem', function () {
        return view('index_Bethlehem');
    });

    Route::get('/index_Salfit', function () {
        return view('index_Salfit');
    });

    Route::get('/index_Tulkarm', function () {
        return view('index_Tulkarm');
    });

    Route::get('/index_Hebron', function () {
        return view('index_Hebron');
    });

    Route::get('/index_Jericho', function () {
        return view('index_Jericho');
    });

    Route::get('/index_Jerusalem', function () {
        return view('index_Jerusalem');
    });

    Route::get('/index_Nablus', function () {
        return view('index_Nablus');
    });

    Route::get('/index_Qalqilya', function () {
        return view('index_Qalqilya');
    });

    Route::get('/index_Tubas', function () {
        return view('index_Tubas');
    });
});
