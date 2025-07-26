<?php

use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;

Route::resource("categories",CategoryController::class);

Route::get("/", function(){
return "Wellcome to admin view";
})->name("index");

Route::get("/courses", function(){
return "Wellcome to admin courses";
})->name("courses");