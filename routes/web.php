<?php

use App\Http\Controllers\AbsenController;
use App\Http\Controllers\MemberController;
use App\Models\absen;
use App\Models\member;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/absen',function(){
    return view('welcome',[
        'absen'=>absen::all()
    ]);
});

Route::get('/',[MemberController::class,'index']);
Route::get('/create',[MemberController::class,'create']);
Route::post('/post', [MemberController::class, 'store']);

Route::post('/store',[AbsenController::class,'store'])->name('store');

// Route::get('/QR', function () {
//     return view('QR');
// });

Route::get('/show/{id}',[MemberController::class,'show']);


// cetak pdf

Route::get('member/cetak/{id}',[MemberController::class,'cetak'])->name('member.cetak');