<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        $messages = Message::orderBy('created_at', 'asc')->get();
        return view('chat', compact('messages'));
    }

    public function sendMessage(Request $request)
    {
        $message = new Message();
        $message->user_id = 1;
        $message->content = $request->input('message');
        $message->inbound = false;
        $message->save();

        return redirect()->route('chat');
    }
}