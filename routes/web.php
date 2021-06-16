<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HelloController;
use App\Http\Controllers\TodoController;
use App\Models\User;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/hello/{name?}', [HelloController::class, 'say'])
    ->middleware('auth')
    ->name('hello');

Route::get('/users/{user}', function(Request $request, User $user) {
    return $user;
})->name('users');

Route::apiResource('todos', TodoController::class);

require __DIR__.'/auth.php';
