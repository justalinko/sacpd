<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', function () {
    return redirect('/login');
});


Route::get('/login' , [AuthController::class , 'login'])->name('login');
Route::post('/login' , [AuthController::class , 'loginPost'])->name('login.post');
Route::get('/register' , [AuthController::class , 'register'])->name('register');
Route::post('/register' , [AuthController::class , 'registerPost'])->name('register.post');


Route::group(['middleware' => 'auth'], function()
{
    Route::get('/dashboard' , [DashboardController::class  , 'index']);
    Route::get('/dokumen' , [DashboardController::class , 'dokumen']);
    Route::post('/upload-dokumen' , [FileController::class , 'uploadDokumen']);
    Route::get('/semua-dokumen' , [DashboardController::class , 'semuaDokumen']);
    Route::get('/d' , [DashboardController::class , 'dokumenDetail']);
    
    Route::group(['prefix' => '/hasil-test'] , function(){
        Route::get('/', [DashboardController::class , 'hasilTest']);
        Route::get('/{id}/edit' , [DashboardController::class , 'hasilTestEdit']);
        Route::post('/{id}/edit',[DashboardController::class , 'hasilTestEditPost']);
    });
    Route::group(['prefix' => '/calon-perangkat'] , function()
    {
        Route::get('/' , [DashboardController::class , 'calon']);
        Route::get('/{id}/delete' , [DashboardController::class , 'calonDelete']);
        Route::get('/{id}/edit' , [DashboardController::class , 'calonEdit']);
        Route::post('/{id}/edit' , [DashboardController::class , 'calonEditPost']);
    });

    Route::get('/profile' , [AuthController::class , 'profile']);
    Route::post('/profile' , [AuthController::class , 'profilePost']);

    Route::get('/logout' , [AuthController::class , 'logout']);
});