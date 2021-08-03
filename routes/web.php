<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZoomClassController;

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

Route::get('/', [ZoomClassController::class, 'index'])->name('classList');
Route::get('/add', [ZoomClassController::class, 'addPage'])->name('addPage');
Route::post('/', [ZoomClassController::class, 'addClass'])->name('addClass');
Route::get('/update/{id}', [ZoomClassController::class, 'updatePage'])->name('updatePage');
Route::post('/update', [ZoomClassController::class, 'updateClass'])->name('updateClass');
Route::get('/delete/{id}', [ZoomClassController::class, 'deleteClass'])->name('deleteClass');
