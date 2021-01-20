<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::prefix('archivos')->group(function(){
    Route::get('create',function(){
        return 'el archivo es ';
    });
    Route::get("edit/{aId}",function($aId){
        return 'el archivo es '.$aId;
    });
});

Route::redirect('/here', '/home');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

/*
Route::get('/home', function () {
    return view('files.home'); donde files es carpeta
});*/
/*
Route::post('/datos', function (Request $request) {
    return $request->all();
});
*/
/*
Route::put('/datos', function (Request $request) {
    return $request->all();
});
*/
Route::delete('/datos', function (Request $request) {
    return $request->all();
});