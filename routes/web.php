<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HscBoardController;
use App\Http\Controllers\HscYearController;
use App\Http\Controllers\HscGroupController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\CustomLoginController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\UniversityController;



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
    Route::get('/details', [ApplicantController::class, 'details'])->name('details');
    Route::get('/admit', [ApplicantController::class, 'admit'])->name('admitcard');
    //Applicant Result route
    Route::get('/result', [ApplicantController::class, 'result'])->name('result');
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
//scores routes
Route::prefix('setup')->group(function(){
    Route::get('/view-score',[ScoreController::class,'index'])->name('score.index');
    Route::get('/add-score',[ScoreController::class,'create'])->name('score.add');
    Route::get('/edit-score/{id}',[ScoreController::class,'edit'])->name('score.edit');
    Route::post('/update-score/{id}',[ScoreController::class,'update'])->name('score.update');
    Route::post('/store-score',[ScoreController::class,'store'])->name('score.store');
    Route::get('/delete-score/{id}',[ScoreController::class,'destroy'])->name('score.delete');
});
//groups routes
Route::prefix('setup')->group(function(){
    Route::get('/view-group',[HscGroupController::class,'index'])->name('group.index');
    Route::get('/add-group',[HscGroupController::class,'create'])->name('group.add');
    Route::get('/edit-group/{id}',[HscGroupController::class,'edit'])->name('group.edit');
    Route::post('/update-group/{id}',[HscGroupController::class,'update'])->name('group.update');
    Route::post('/store-group',[HscGroupController::class,'store'])->name('group.store');
    Route::get('/delete-group/{id}',[HscGroupController::class,'destroy'])->name('group.delete');
});

//notice routes
Route::prefix('setup')->group(function(){
    Route::get('/view-notice',[NoticeController::class,'index'])->name('notice.index');
    Route::get('/add-notice',[NoticeController::class,'create'])->name('notice.add');
    Route::get('/edit-notice/{id}',[NoticeController::class,'edit'])->name('notice.edit');
    Route::post('/update-notice/{id}',[NoticeController::class,'update'])->name('notice.update');
    Route::post('/store-notice',[NoticeController::class,'store'])->name('notice.store');
    Route::get('/delete-notice/{id}',[NoticeController::class,'destroy'])->name('notice.delete');

    Route::get('/notice',[NoticeController::class,'notice'])->name('notice');
});

//University routes
Route::prefix('setup')->group(function(){
    Route::get('/view-university',[UniversityController::class,'index'])->name('university.index');
    Route::get('/add-university',[UniversityController::class,'create'])->name('university.add');
    Route::get('/edit-university/{id}',[UniversityController::class,'edit'])->name('university.edit');
    Route::post('/update-university/{id}',[UniversityController::class,'update'])->name('university.update');
    Route::post('/store-university',[UniversityController::class,'store'])->name('university.store');
    Route::get('/delete-university/{id}',[UniversityController::class,'destroy'])->name('university.delete');

    Route::get('/university',[UniversityController::class,'university'])->name('university');
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



Route::get('applicant/login', [CustomLoginController::class, 'index'])->name('applicant.login');
Route::post('applicant/customlogin', [CustomLoginController::class, 'customLogin'])->name('login.custom');
Route::get('applicant/signout', [CustomLoginController::class, 'signOut'])->name('applicant.signout')
;
Route::get('admin/signout', [CustomLoginController::class, 'AdminsignOut'])->name('admin.signout');
Route::get('about', [WebsiteController::class, 'about'])->name('about');
Route::get('gst-list', [WebsiteController::class, 'gstList'])->name('gst.list');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
