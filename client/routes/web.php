<?php

# Controllers
use App\Http\Controllers\SampleController;
use App\Http\Controllers\ApacheController;
use App\Http\Controllers\CosmeController;
use App\Http\Controllers\InvokeController;
# Route
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
    return view('welcome');
});

Route::controller(ApacheController::class)->group(function() {
    Route::get('/apache/rewrite-module', 'checkRewriteModule');
});

Route::get('/invoke', InvokeController::class);

Route::controller(CosmeController::class)->group(function() {
    Route::get('/cosme', 'index');
});
