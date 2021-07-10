<?php

use App\Http\Controllers\CentralController;
use App\Http\Controllers\CommitteController;
use App\Http\Controllers\FeesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TeacherProfileController;
use Illuminate\Support\Facades\Route;

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


Route::group(['middleware' => ['auth','role:campus_admin']], function () {
    Route::get('/', function () {
        return view('welcome');
    });
});
// Admin Routes
Route::group(['prefix' => 'admin', 'as' => 'admin.','middleware' => ['auth','role:campus_admin']], function () {
    // Dashboard Controller
    Route::get('dashboard', [HomeController::class, 'index']) -> name('dashboard');
    Route::post('dashboard/store', [HomeController::class, 'storeBilling']) -> name('storeBilling');
    Route::resource('fees', FeesController::class);
    // Teacher Routes
    Route::get('teacher', [TeacherController::class, 'index']) -> name('teacher');
    Route::get('teacher/payment-list', [TeacherController::class, 'paymentList']) -> name('teacher-payment-list');
    Route::get('teacher/accepted/{id}', [TeacherController::class, 'accepted']) -> name('teacher-payment-accepted');
    Route::get('teacher/rejected/{id}', [TeacherController::class, 'rejected']) -> name('teacher-payment-rejected');
    // Notice Routes
    Route::resource('notice', NoticeController::class);
    // Central Routes
    Route::get('central', [CentralController::class, 'create']) -> name('central-create');
    Route::post('central/store', [CentralController::class, 'store']) -> name('central-store');
});
// User Rote
Route::group(['prefix' => 'user', 'as' => 'user.','middleware' => ['auth','role:teacher']], function () {
    Route::get('dashboard', [TeacherProfileController::class , 'index']);
    Route::get('payment', [TeacherProfileController::class , 'create'])->name('payment');
    Route::post('payment/store', [TeacherProfileController::class , 'store']) -> name('payment-store');
    Route::get('payment/list', [TeacherProfileController::class , 'list']) -> name('payment-list');
});
// Central Rote
Route::group(['prefix' => 'central', 'as' => 'central.','middleware' => ['auth','role:central_admin']], function () {
    Route::resource('commitee', CommitteController::class);
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
