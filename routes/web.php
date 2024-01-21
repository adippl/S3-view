<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin_user_manager;

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home/s3_accounts', [App\Http\Controllers\S3_user_accounts::class, 'index']);
Route::post('/home/s3_accounts', [App\Http\Controllers\S3_user_accounts::class, 'store']);
Route::get('/home/s3_accounts/create', [App\Http\Controllers\S3_user_accounts::class, 'create']);
Route::get('/home/s3_accounts/{s3_user_account}/edit', [App\Http\Controllers\S3_user_accounts::class, 'edit']);
Route::get('/home/s3_accounts/{s3_user_account}/delete', [App\Http\Controllers\S3_user_accounts::class, 'delete']);
Route::put('/home/s3_accounts/{s3_user_account}', [App\Http\Controllers\S3_user_accounts::class, 'update']);
Route::delete('/home/s3_accounts/{s3_user_account}', [App\Http\Controllers\S3_user_accounts::class, 'destroy']);
Route::get('/home/s3_accounts/{s3_user_account}', [App\Http\Controllers\S3_user_accounts::class, 'show']);

Route::get('/admin/account_manager', [Admin_user_manager::class, 'index']);
Route::post('/admin/account_manager', [Admin_user_manager::class, 'store']);
Route::get('/admin/account_manager/create', [Admin_user_manager::class, 'create']);
Route::get('/admin/account_manager/{User}/edit', [App\Http\Controllers\Admin_user_manager::class, 'edit']);
Route::delete('/admin/account_manager/{User}/delete', [App\Http\Controllers\Admin_user_manager::class, 'delete']);
Route::get('/admin/account_manager/{User}', [App\Http\Controllers\Admin_user_manager::class, 'show']);
