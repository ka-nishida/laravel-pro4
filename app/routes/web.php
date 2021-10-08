<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController; //追加
use App\Http\Controllers\MailController; //追加
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[MailController::class,'index']);
Route::post('/',[MailController::class,'update']);
Route::get('admin',[MailController::class,'create']);
Route::post('admin',[MailController::class,'store']);

// Route::resource('/',MailController::class);
// Route::get('admin', [UploadController::class, 'index']);
// Route::resource('admin',UploadController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
