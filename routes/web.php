<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HscBoardController;
use App\Http\Controllers\HscYearController;
use App\Http\Controllers\HscGroupController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\Admin\DashboardController;



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
Route::group(['as'=>'admin.','prefix' => 'admin','middleware'=>['auth','admin']], function () {
    Route::get('/', [DashboardController::class,'index'])->name('dashboard');
});

Route::group(['as'=>'applicant.','prefix' => 'applicant','middleware'=>['auth','user']], function () {
    Route::get('/', [App\Http\Controllers\User\DashboardController::class,'index'])->name('dashboard');
});

// Route::get('/admin', function () {
//     return view('Backend.layout.master');
// });
Route::get('/', function () {
    return view('frontend.pages.index');
});
Route::get('/application',[ApplicantController::class,'create'])->name('application');
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

//units routes
Route::prefix('setup')->group(function(){
    Route::get('/view-unit',[UnitController::class,'index'])->name('unit.index');
    Route::get('/add-unit',[UnitController::class,'create'])->name('unit.add');
    Route::get('/edit-unit/{id}',[UnitController::class,'edit'])->name('unit.edit');
    Route::post('/update-unit/{id}',[UnitController::class,'update'])->name('unit.update');
    Route::post('/store-unit',[UnitController::class,'store'])->name('unit.store');
    Route::get('/delete-unit/{id}',[UnitController::class,'destroy'])->name('unit.delete');
});

//units routes
Route::prefix('application')->group(function(){
    Route::get('/view',[ApplicantController::class,'index'])->name('application.index');
    Route::get('/show/{id}',[ApplicantController::class,'show'])->name('application.show');
    Route::get('/delete/{id}',[ApplicantController::class,'destroy'])->name('application.delete');
    Route::post('/store',[ApplicantController::class,'store'])->name('application.store');
});

//payments routes
Route::prefix('application')->group(function(){
    Route::get('/payment-view',[PaymentController::class,'index'])->name('payment.index');

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
