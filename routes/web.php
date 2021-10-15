<?php

use App\Http\Controllers\TableDataController;
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

Route::get('/', [TableDataController::class,'index']);
Route::get('index/{id}', [TableDataController::class,'manage_list']);
Route::post('index/ManageList', [TableDataController::class,'save_list']);
Route::get('index/delete/{id}', [TableDataController::class,'DeleteList']);
