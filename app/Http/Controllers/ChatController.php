<?php

namespace App\Http\Controllers;

use LucianoTonet\GroqLaravel\Facades\Groq;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    // Show the chat interface
    public function showChat()
    {
        return view('chat');  // This renders the chat interface view
    }

    // Handle the chat message and get the response
    public function getChatResponse(Request $request)
    {
        try {
            // Send a request to the Groq API to generate a response
            $response = Groq::chat()->completions()->create([
                'model' => 'llama-3.1-70b-versatile',  // Specify the model to use
                'messages' => [
                    ['role' => 'user', 'content' => $request->input('message', 'Hello, how are you?')],
                ],
            ]);

            // Extract and return the content of the message from the response
            $chatResponse = $response['choices'][0]['message']['content'];

            return response()->json(['response' => $chatResponse]);
        } catch (\Exception $e) {
            // Handle any errors that might occur
            return response()->json(['error' => 'Failed to get response from Groq API: ' . $e->getMessage()], 500);
        }
    }
}
