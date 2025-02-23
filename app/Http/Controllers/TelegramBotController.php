<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram\Bot\Laravel\Facades\Telegram;

class TelegramBotController extends Controller
{
    public function handleWebhook(Request $request)
    {
        \Log::info($request->all());

        // Get message details
        $chat_id = $request->message['from']['id'];
        $reply_to_message = $request->message['message_id'];
        $message_text = $request->message['text'] ?? '';

        \Log::info("chat_id: {$chat_id}");
        \Log::info("reply_to_message: {$reply_to_message}");

        // Check if the user said 'hi bot'
        if (strtolower($message_text) === 'hi bot') {
            // Send a message back to the user
            Telegram::sendMessage([
                'chat_id' => $chat_id,
                'reply_to_message_id' => $reply_to_message,
                'text' => 'I love you oun nith. 🥰😜'
            ]);
        }

        return 'Webhook handled successfully';
    }

    // public function sendMessage()
    // {
    //     Telegram::sendMessage([
    //         'chat_id' => 'your_chat_id',
    //         'text' => 'Hello from Laravel Telegram Bot!'
    //     ]);

    //     return 'Message sent!';
    // }
}


