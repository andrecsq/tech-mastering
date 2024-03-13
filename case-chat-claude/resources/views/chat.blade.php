<!-- resources/views/chat.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <link rel="stylesheet" href="{{ asset('css/chat.css') }}">
</head>
<body>
    <div class="chat-container">
        <div class="chat-header">
            <h2>Chat</h2>
        </div>
        <div class="chat-messages">
            @foreach ($messages as $message)
                <div class="message @if ($message->user_id == 2) sent @else received @endif">
                    <p>{{ $message->content }}</p>
                    <span class="timestamp">{{ $message->created_at->format('h:i A') }}</span>
                </div>
            @endforeach
        </div>
        <div class="chat-input">
            <form action="{{ route('send-message') }}" method="POST">
                @csrf
                <input type="text" name="message" placeholder="Type your message...">
                <button type="submit">Send</button>
            </form>
        </div>
    </div>
</body>
</html>
