<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\SignUp;

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
// Route::get('admin/{age}', function(string $age){
//     return "Ban du tuoi truy cap trang nay";
// })->whereNumber('age')->middleware('checkage');

Route::get('/', [SignUp::class, 'index']);
Route::get('/signup', [SignUp::class, 'signup']);
Route::post('process', [SignUp::class, 'process']);


Route::post('/login', function (){
    return view('demo');
})->middleware('checklogin')->name("check");

Route::get('/login', function (){
    return view('login');
})->name("login");




