<?php

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
    return view('welcome2');
});

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home/s3_accounts', [App\Http\Controllers\S3_user_accounts::class, 'index']);
Route::post('/home/s3_accounts', [App\Http\Controllers\S3_user_accounts::class, 'store']);
Route::get('/home/s3_accounts/create', [App\Http\Controllers\S3_user_accounts::class, 'create']);
Route::get('/home/s3_accounts/{s3_user_account}/edit', [App\Http\Controllers\S3_user_accounts::class, 'edit']);
Route::get('/home/s3_accounts/{account}/delete', [App\Http\Controllers\S3_user_accounts::class, 'delete']);
Route::put('/home/s3_accounts/{s3_user_account}', [App\Http\Controllers\S3_user_accounts::class, 'update']);
Route::delete('/home/s3_accounts/{s3_user_account}', [App\Http\Controllers\S3_user_accounts::class, 'destroy']);
Route::get('/home/s3_accounts/{account}', [App\Http\Controllers\S3_user_accounts::class, 'show']);
#Route::get('/home/s3_accounts/{account}', [App\Http\Controllers\S3_user_accounts::class, 'edit']);
