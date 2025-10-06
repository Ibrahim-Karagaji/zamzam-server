<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::delete("/test", [UserController::class, "registry"]);
Route::post("/post", [UserController::class, "post"]);
Route::put("/update", [UserController::class, "update"]);
Route::get("/get", [UserController::class, "get"]);
