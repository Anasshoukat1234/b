<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\TestingController;
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

Route::post("login", [BookController::class,'getData'])->name('login');
Route::get("/", [BookController::class,'index']);
Route::get("list", [TestingController::class,'flex']);
Route::get("/search", [BookController::class,'search'])->name('web.index');
Route::get('/', [BookController::class,'show']);
Route::get("edit", [BookController::class,'showdata']);
Route::get("edit/{id}", [BookController::class,'showdata']);
Route::put("/edit", [BookController::class,'update']);
Route::get("delete/{id}", [BookController::class,'delete']);
Route::get("show-form" , [BookController::class, 'showForm'])->name('book.show');
Route::post("add" , [BookController::class, 'storeData'])->name("book.store");
