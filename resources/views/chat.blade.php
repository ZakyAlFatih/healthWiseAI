<!-- resources/views/groq-chat.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthWiseAi Chat</title>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
    <div
        style="max-width: 600px; margin: 50px auto; padding: 20px; border: 1px solid #1fceda; border-radius: 10px;background-color: #3995e6;">
        <h1>HealthWiseAi Chat</h1>
        <div id="chat-box"
            style="height: 300px; overflow-y: auto; margin-bottom: 20px; border: 1px solid #31d109; padding: 10px;background-color: #32d224">
            <!-- Chat messages will appear here -->
        </div>

        <form id="chat-form">
            <input type="text" id="user-message" placeholder="Type your message..." style="width: 80%; padding: 10px;">
            <button type="submit" style="padding: 10px;">Send</button>
        </form>
    </div>

    <script>
        // Get the chat box and form elements
        const chatBox = document.getElementById('chat-box');
        const userMessageInput = document.getElementById('user-message');
        const chatForm = document.getElementById('chat-form');

        // Handle form submission to send the message to the backend
        chatForm.addEventListener('submit', function(event) {
            event.preventDefault();

            const userMessage = userMessageInput.value.trim();
            if (!userMessage) return;

            // Append the user's message to the chat box
            chatBox.innerHTML += `<div><strong>You:</strong> ${userMessage}</div>`;
            userMessageInput.value = ''; // Clear the input

            // Scroll to the bottom of the chat box
            chatBox.scrollTop = chatBox.scrollHeight;

            // Send the message to the backend via AJAX (using Axios)
            axios.post('/chat', {
                    message: userMessage
                })
                .then(function(response) {
                    const botMessage = response.data.response;
                    chatBox.innerHTML += `<div><strong>HealthwiseAI:</strong> ${botMessage}</div>`;
                    chatBox.scrollTop = chatBox.scrollHeight; // Scroll again after appending
                })
                .catch(function(error) {
                    chatBox.innerHTML +=
                        `<div><strong>Error:</strong> Something went wrong. Please try again.</div>`;
                    chatBox.scrollTop = chatBox.scrollHeight; // Scroll again after appending
                });
        });
    </script>
</body>

</html>
