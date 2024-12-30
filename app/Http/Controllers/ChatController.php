<?php

namespace App\Http\Controllers;

use LucianoTonet\GroqLaravel\Facades\Groq;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function showChat()
    {
        return view('chat');  
    }

    public function getChatResponse(Request $request)
    {
        try {
            $healthCheckResponse = Groq::chat()->completions()->create([
                'model' => 'llama-3.1-70b-versatile',  
                'messages' => [
                    ['role' => 'user', 'content' => 'Hanya menjawab True or False tanpa penjelasan, apakah ini termasuk pertanyaan/pernyataan terkait Kesehatan: ' . $request->input('message')]
                ],
            ]);

            $healthCheckResult = $healthCheckResponse['choices'][0]['message']['content'];

            if (strtolower($healthCheckResult) === 'true') {
                $response = Groq::chat()->completions()->create([
                    'model' => 'llama-3.1-70b-versatile',  
                    'messages' => [
                        ['role' => 'user', 'content' => $request->input('message')]
                    ],
                ]);
                $chatResponse = $response['choices'][0]['message']['content'];

                return response()->json(['response' => $chatResponse]);
            } 
            else {
                return response()->json(['response' => 'Tolong tanya saya terkait pertanyaan Kesehatan.']);
            }

        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to get response from Groq API: ' . $e->getMessage()], 500);
        }
    }
}
