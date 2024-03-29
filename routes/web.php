<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserRequestController;
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
    return view('index');
});

Route::get('/privacy-policy', function () {
    return view('index');
})->name('privacy-policy');

Route::post('/request', [UserRequestController::class, 'getRequest'])->prefix('send');
