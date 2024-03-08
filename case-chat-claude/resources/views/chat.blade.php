<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Application</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="chat-container">
        <div id="chat-box">
            <!-- Example chat messages -->
            <div class="message received">Hello, how are you today?</div>
            <div class="message sent">I'm good, thanks for asking!</div>
        </div>
        <form id="message-form">
            <input type="text" id="message-input" placeholder="Type a message..." autocomplete="off"/>
            <button type="button" id="send-button">Send</button>
        </form>
    </div>
</body>
</html>

<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #f2f2f2;
    }

    #chat-container {
        width: 90%;
        max-width: 600px;
        margin: auto;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    #chat-box {
        height: 400px;
        overflow-y: auto;
        padding: 20px;
        background: #e5e5ea;
        border-bottom: 2px solid #ddd;
    }

    .message {
        margin-bottom: 12px;
        padding: 10px;
        border-radius: 10px;
        color: white;
        max-width: 75%;
    }

    .sent {
        background-color: #007BFF;
        margin-left: auto;
        text-align: right;
    }

    .received {
        background-color: #007BFF;
        /* color: black; */
    }

    #message-form {
        display: flex;
        padding: 10px;
    }

    #message-input {
        flex: 1;
        padding: 10px;
        margin-right: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    button {
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        background-color: #007bff;
        color: white;
        cursor: pointer;
    }

    button:hover {
        background-color: #0056b3;
    }

</style>

<script>
    $(document).ready(function() {
        $('#send-button').click(function() {
            var message = $('#message-input').val().trim();
            if(message) { // Check if the message is not empty
                $('#chat-box').append('<div class="message sent">' + message + '</div>');
                $('#message-input').val(''); // Clear the input after appending
                $('#chat-box').scrollTop($('#chat-box')[0].scrollHeight); // Scroll to the bottom of the chat box
            }
        });
    });
</script>

{{-- <script>
    $(document).ready(function() {
        $('#send-button').click(function() {
            var message = $('#message-input').val();
            $.ajax({
                url: '/send-message', // Replace '/send-message' with your actual endpoint URL
                type: 'POST',
                data: JSON.stringify({ message: message }),
                contentType: 'application/json',
                headers: {
                    // Include CSRF token for Laravel applications. Adjust as needed.
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') 
                },
                success: function(response) {
                    console.log('Success:', response);
                    // Process the response data as needed
                    $('#message-input').val(''); // Clear the input after sending
                },
                error: function(error) {
                    console.error('Error:', error);
                }
            });
        });
    });
</script> --}}