<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Notifications\VerifyEmail;
use App\Http\Controllers\VerifyEmailController;

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
    return redirect()->route('VerifyEmail.index')->withInput();
});

Route::resource('VerifyEmail', VerifyEmailController::class);
