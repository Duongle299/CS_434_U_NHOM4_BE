<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PhieuNhapKhoController;
Route::apiResource('phieu-nhap-kho', PhieuNhapKhoController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/phieu-nhap-kho', [PhieuNhapKhoController::class, 'index'])
;
