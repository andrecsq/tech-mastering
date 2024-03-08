<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('chat');
// });


use App\Http\Controllers\ChatController;

Route::get('/chat', [ChatController::class, 'index'])->name('chat');
Route::post('/send-message', [ChatController::class, 'sendMessage'])->name('send-message');