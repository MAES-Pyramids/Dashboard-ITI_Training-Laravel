<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentControler;

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





Route::prefix('admin')->group(function(){
    Route::get('/', function(){
        return view('admin.index');
    })->name('admin.index');;
    Route::resource('student', studentControler::class);
});

