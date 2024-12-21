<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthWise AI Chatbot</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primaryColor: '#5d5a88',
                        cardBg: '#F9F9FE',
                    },
                    borderRadius: {
                        card: '1rem',
                    },
                    boxShadow: {
                        active: '0px 8px 15px rgba(93, 90, 136, 0.2)',
                    }
                }
            }
        }
    </script>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="fixed top-0 left-0 w-full bg-white shadow-md">
        <div class="flex items-center px-8 py-4">
            <img src="./image/HealthWise.png" alt="HealthWise Logo" class="h-10">
            <p class="text-lg font-bold text-primaryColor ml-4">HealthWiseAI</p>
        </div>
    </nav>

    <!-- Chatbot Section -->
    <div class="flex items-center justify-center mt-28">
        <div class="w-full max-w-4xl bg-cardBg shadow-lg rounded-card p-6">
            <h1 class="text-3xl font-bold text-primaryColor mb-4">Chat with HealthWiseAI</h1>
            <div class="flex flex-col space-y-4">
                <!-- Chat Display -->
                <div id="chat-box" class="flex-grow h-96 overflow-y-auto bg-white rounded-lg shadow-inner p-4">
                    <!-- Example Messages -->
                </div>
                <!-- User Input -->
                <div class="flex items-center space-x-2">
                    <input type="text" id="chat-input" placeholder="Type your message here..." class="flex-grow p-3 rounded-lg border border-gray-300">
                    <button id="send-button" class="bg-primaryColor text-white px-4 py-2 rounded-lg">Send</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        const chatBox = document.getElementById('chat-box');
        const chatInput = document.getElementById('chat-input');
        const sendButton = document.getElementById('send-button');

        sendButton.addEventListener('click', function() {
            const userMessage = chatInput.value.trim();
            if (!userMessage) return;

            const userMessageDiv = document.createElement('div');
            userMessageDiv.className = 'flex items-start justify-end space-x-2 mt-4';
            userMessageDiv.innerHTML = `
                <div class="bg-gray-200 p-3 rounded-lg">
                    <p>${userMessage}</p>
                </div>
            `;
            chatBox.appendChild(userMessageDiv);
            chatBox.scrollTop = chatBox.scrollHeight;

            chatInput.value = '';

            axios.post('/chat', { message: userMessage })
                .then(function(response) {
                    const botMessage = response.data.response;

                    const botMessageDiv = document.createElement('div');
                    botMessageDiv.className = 'flex items-start space-x-2';
                    botMessageDiv.innerHTML = `
                        <div class="bg-primaryColor text-white p-3 rounded-lg">
                            <p>${botMessage}</p>
                        </div>
                    `;
                    chatBox.appendChild(botMessageDiv);
                    chatBox.scrollTop = chatBox.scrollHeight;
                })
                .catch(function() {
                    const errorMessageDiv = document.createElement('div');
                    errorMessageDiv.className = 'flex items-start space-x-2';
                    errorMessageDiv.innerHTML = `
                        <div class="bg-red-500 text-white p-3 rounded-lg">
                            <p>Error: Something went wrong. Please try again.</p>
                        </div>
                    `;
                    chatBox.appendChild(errorMessageDiv);
                    chatBox.scrollTop = chatBox.scrollHeight;
                });
        });
    </script>
</body>

</html>
