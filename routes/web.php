<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return 'Hello World!';
});

Route::get('/access-credentials/{id}', [UserController::class, 'access_credentials'])->name('access-credentials');
Route::post('/submit-credentials', [UserController::class, 'submit_credentials'])->name('submit-credentials');