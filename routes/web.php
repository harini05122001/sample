<?php

use App\Http\Controllers\NewsletterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::view('/home',"home");
Route::view('/user',"user");
Route::view('/noaccess',"noaccess");
Route::get('/index',[NewsletterController::class,'index']);
Route::post('/subscribe',[NewsletterController::class,'subscribe']);

