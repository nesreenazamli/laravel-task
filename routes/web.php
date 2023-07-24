<?php

use App\Http\Controllers\ArshaController;
use App\Http\Controllers\FormController;
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

Route::get("/", [ArshaController::class, "index"]) -> name("index");
Route::post("/form_data", [FormController::class, "form_data"]) -> name("arsha-files.form_data");
Route::get("/inner-page", [ArshaController::class, "inner_page"]) -> name("inner_page");
Route::get("/portfolio-details", [ArshaController::class, "portfolio_details"]) -> name("portfolio_details");
