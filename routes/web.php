<?php

use App\Http\Controllers\siteController;
use Illuminate\Support\Facades\Route;

Route::get("/",[siteController::class, "homePage"]);
Route::get("/about",[siteController::class, "aboutPage"]);
Route::get("/contact",[siteController::class, "contactPage"]);


Route::get("/singin", [siteController::class, "singinPage"]);
Route::get("/singup",[siteController::class, "singupPage"]);
Route::get("/about",[siteController::class, "aboutPage"]);


