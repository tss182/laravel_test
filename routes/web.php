<?php

use App\Http\Controllers\auth\LoginController;
use Illuminate\Support\Facades\Route;


Route::middleware(["guest"])->group(function (){
//    Route::get("/login",[LoginController::class,"index"])->name("auth.login");
//    Route::POST("/login",[LoginController::class,"login"]);
});

Route::get("/",function (){
    return view("dashboard");
})->name("dashboard");
