<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram\Bot\Laravel\Facades\Telegram;

class TelegramBotController extends Controller
{
    public function handleWebhook(Request $request)
    {
      $update = Telegram::commandsHandler(true);
      return response()->json(['status' => 'ok']);
    }

    public function sendMessage()
    {
        Telegram::sendMessage([
            'chat_id' => 'your_chat_id',
            'text' => 'Hello from Laravel Telegram Bot!'
        ]);

        return 'Message sent!';
    }
}
