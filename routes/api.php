<?php

use App\Http\Controllers\Api\PhieuNhapKhoController;
use App\Http\Controllers\VatTucontroll;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('admin/lay-data', [VatTucontroll::class, 'getdata']);
Route::post('admin/them-vat-tu', [VatTucontroll::class, 'create']);
Route::post('admin/update-vat-tu', [VatTucontroll::class, 'update']);
Route::post('admin/delete-vat-tu', [VatTucontroll::class, 'delete']);

Route::get('admin/lay-data-phieunhapkho', [PhieuNhapKhoController::class, 'index']);
Route::post('admin/them-phieu-nhap', [PhieuNhapKhoController::class, 'store']);

Route::get('cart', 'App\Http\Controllers\CartController@index');
Route::delete('cart/{id}', 'App\Http\Controllers\CartController@destroy');

// THÊM DÒNG NÀY ĐỂ LẤY DỮ LIỆU TRANG CHỦ
Route::get('homepage-data', 'App\Http\Controllers\HomepageController@index');