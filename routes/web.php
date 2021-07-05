<?php

use App\Http\Controllers\CentralController;
use App\Http\Controllers\FeesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TeacherProfileController;
use App\Models\Fees;
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

Route::group(['prefix' => 'admin', 'as' => 'admin.','middleware' => ['auth','role:campus_admin']], function () {
    // Dashboard Controller
    Route::get('dashboard', [HomeController::class, 'index']) -> name('dashboard');
    Route::post('dashboard/store', [HomeController::class, 'storeBilling']) -> name('storeBilling');
    Route::resource('fees', FeesController::class);
    Route::get('teacher', [TeacherController::class, 'index']) -> name('teacher');
    Route::resource('notice', NoticeController::class);
    Route::get('central', [CentralController::class, 'create']) -> name('central-create');
    Route::post('central/store', [CentralController::class, 'store']) -> name('central-store');
});

Route::group(['prefix' => 'user', 'as' => 'user.','middleware' => ['auth','role:teacher']], function () {
    Route::get('dashboard', [TeacherProfileController::class , 'index']);
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
