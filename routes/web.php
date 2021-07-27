<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
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

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');

Route::get('/users', [UserController::class, 'index'])
    ->name('users');

// Test Slack error reporting
Route::get('/error', function () {
    $data = [];
    $error =$data['users']; // Trigger exception
});

// Test http client
Route::get('/rest', function () {
    $response = Http::post('https://nameday.abalin.net/today');
    return json_decode($response->body());
});


require __DIR__.'/auth.php';
