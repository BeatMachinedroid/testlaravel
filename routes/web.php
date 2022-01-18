<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
Route::get('/',[UserController::class,'show']);
Route::view('add', 'tambah');
Route::post('add',[UserController::class,'adddata']);
Route::get('del/{id}',[UserController::class,'delete']);
Route::get('update/{id}',[UserController::class,'showUp']);
Route::post('update/{id}',[UserController::class,'update']);