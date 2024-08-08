<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatBotController;

Route::get('/', function () {
    return view('welcome');
});
Route::post('send', [ChatBotController::class, 'sendChat']);
Route::post('/chatbot', [ChatBotController::class, 'sendChat']);
Route::post('chatbot/response', 'ChatbotController@sendResponse');
Route::post('/chat', 'ChatController@handleMessage');

