<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HscBoardController;
use App\Http\Controllers\HscYearController;
use App\Http\Controllers\HscGroupController;
use App\Http\Controllers\ApplicantController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin', function () {
    return view('Backend.layout.master');
});
Route::get('/', function () {
    return view('frontend.pages.index');
});
Route::get('/application',[ApplicantController::class,'index'])->name('application');
//board routes
Route::prefix('setup')->group(function(){
    Route::get('/view-board',[HscBoardController::class,'index'])->name('board.index');
    Route::get('/add-board',[HscBoardController::class,'create'])->name('board.add');
    Route::get('/edit-board/{id}',[HscBoardController::class,'edit'])->name('board.edit');
    Route::post('/update-board/{id}',[HscBoardController::class,'update'])->name('board.update');
    Route::post('/store-board',[HscBoardController::class,'store'])->name('board.store');
    Route::get('/delete-board/{id}',[HscBoardController::class,'destroy'])->name('board.delete');
});
//years routes
Route::prefix('setup')->group(function(){
    Route::get('/view-year',[HscYearController::class,'index'])->name('year.index');
    Route::get('/add-year',[HscYearController::class,'create'])->name('year.add');
    Route::get('/edit-year/{id}',[HscYearController::class,'edit'])->name('year.edit');
    Route::post('/update-year/{id}',[HscYearController::class,'update'])->name('year.update');
    Route::post('/store-year',[HscYearController::class,'store'])->name('year.store');
    Route::get('/delete-year/{id}',[HscYearController::class,'destroy'])->name('year.delete');
});
//years routes
Route::prefix('setup')->group(function(){
    Route::get('/view-group',[HscGroupController::class,'index'])->name('group.index');
    Route::get('/add-group',[HscGroupController::class,'create'])->name('group.add');
    Route::get('/edit-group/{id}',[HscGroupController::class,'edit'])->name('group.edit');
    Route::post('/update-group/{id}',[HscGroupController::class,'update'])->name('group.update');
    Route::post('/store-group',[HscGroupController::class,'store'])->name('group.store');
    Route::get('/delete-group/{id}',[HscGroupController::class,'destroy'])->name('group.delete');
});

