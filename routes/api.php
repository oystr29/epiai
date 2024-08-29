<?php

use App\Http\Controllers\Api\DistrictController;
use App\Http\Controllers\Api\ProvinceController;
use App\Http\Controllers\Api\RegencyController;
use App\Http\Controllers\Api\VillageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/province', [ProvinceController::class, 'index']);
Route::get('/{province_id}/regency', [RegencyController::class, 'index']);
Route::get('/{regency_id}/district', [DistrictController::class, 'index']);
Route::get('/{district_id}/village', [VillageController::class, 'index']);
