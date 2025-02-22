<?php

// routes/api.php

use App\Http\Controllers\TelegramBotController;
use Illuminate\Support\Facades\Route;

Route::post('/telegram/webhook', [TelegramBotController::class, 'handleWebhook']);
Route::get('/telegram/sent-message', [TelegramBotController::class, 'sendMessage']);