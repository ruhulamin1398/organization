<?php

use App\Http\Controllers\FeesController;
use App\Http\Controllers\HomeController;
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
    route::resource('fees', FeesController::class);
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
