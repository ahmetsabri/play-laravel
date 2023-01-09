<?php

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

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

Route::get('/', function(){

  echo phpinfo(), php_ini_loaded_file();
});



Route::get('test', function(Request $request){
        if (! $request->hasValidSignature()) {
            abort(404);
        }

    return 'test';
})->name('test');
