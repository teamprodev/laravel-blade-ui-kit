<?php

use App\Http\Controllers\BladeUIController;
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

Route::get('/', function () {
    return redirect('blade');
});

Route::any('blade', [BladeUIController::class,'BladeUI'])->name('bladeui');

Route::post('/yajra', [BladeUIController::class,'yajraGetData'])->name('yajra.data');

Route::post('/uppy/{application}', [BladeUIController::class,'uppy'])->name('uppy');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
