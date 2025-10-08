<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\DistributionController;
use Illuminate\Support\Facades\Route;

Route::get("/user", [UserController::class, "registry"]);
Route::get("/report", [ReportController::class, "report"]);
Route::get("/hotel", [HotelController::class, "hotel"]);
Route::get("/Distrbution", [DistributionController::class, "Distrbution"]);


