<?php

namespace App\Http\Controllers;

use LucianoTonet\GroqLaravel\Facades\Groq;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use App\Models\RiwayatKesehatan;
use App\Models\Rekomendasi;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    function showFood()
    {

        //dd($siswa);
        return view('Food');
    }

    public function getRecommendation()
    {
        // Fetch the newestuser's health data
        $data = RiwayatKesehatan::where('userID', Auth::id())
            ->orderBy('riwayatID', 'desc') // Urutkan berdasarkan riwayatID secara menurun (terbaru di atas)
            ->first(); // Ambil data pertama (terbaru)



        if (!$data) {
            return response()->json(['message' => 'No health data found for this user'], 404);
        }

        // Prepare the summary of the health data
        $summary = implode(', ', [
            'Weight: ' . ($data->weight ?? 'N/A'),
            'Height: ' . ($data->height ?? 'N/A'),
            'Gender: ' . ($data->gender ?? 'N/A'),
            'Health History: ' . (is_array($data->health_history) ? implode(', ', $data->health_history) : 'N/A'),
            'Symptoms: ' . (is_array($data->symptoms) ? implode(', ', $data->symptoms) : 'N/A'),
            'Activity Level: ' . ($data->activity_level ?? 'N/A'),
            'Step Count: ' . ($data->step_count ?? 'N/A'),
            'Sleep Duration: ' . ($data->sleep_duration ?? 'N/A'),
            'Physical Activity: ' . (is_array($data->physical_activity) ? implode(', ', $data->physical_activity) : 'N/A'),
            'Calories Burned: ' . ($data->calories_burned ?? 'N/A'),
            'Sedentary Time: ' . ($data->sedentary_time ?? 'N/A'),
            'Water Intake: ' . ($data->water_intake ?? 'N/A'),
            'Meal Log: ' . ($data->meal_log ?? 'N/A'),
            'Mood Level: ' . ($data->mood_level ?? 'N/A'),
        ]);

        $finalOutputFood = $summary . '. berdasarkan data diatas rekomendasi makanan apa yang sebaiknya dikonsumsi ?';
        $finalOutputExercise = $summary . '. berdasarkan data diatas rekomendasi aktivitas apa yang sebaiknya saya lakukan ?';
        // Make the API call to Groq
        try {
            $responseFood = Groq::chat()->completions()->create([
                'model' => 'llama-3.1-70b-versatile',
                'messages' => [
                    ['role' => 'user', 'content' => $finalOutputFood],
                ],
            ]);
        } catch (GroqException $e) {
            Log::error('Error in Groq API: ' . $e->getMessage());
            abort(500, 'Error processing your  food recommendation request.');
        }
        $recommendationFood = $responseFood['choices'][0]['message']['content'];

        try {
            $responseExer = Groq::chat()->completions()->create([
                'model' => 'llama-3.1-70b-versatile',
                'messages' => [
                    ['role' => 'user', 'content' => $finalOutputExercise],
                ],
            ]);
        } catch (GroqException $e) {
            Log::error('Error in Groq API: ' . $e->getMessage());
            abort(500, 'Error processing your  food recommendation request.');
        }


        $recommendationExer = $responseExer['choices'][0]['message']['content'];

        // Simpan rekomendasi makanan ke dalam database
        $rekomendasi = new Rekomendasi();
        $rekomendasi->userID = Auth::id(); // ID pengguna yang sedang login
        $rekomendasi->foodrecom = $recommendationFood; // Simpan hasil rekomendasi makanan
        $rekomendasi->exerrecom = $recommendationExer; // Simpan hasil rekomendasi makanan
        $rekomendasi->save();


        // Fetch the stored recommendation from the database based on userID and recomID (latest)
        $rekomendasi = Rekomendasi::where('userID', Auth::id())
            ->orderBy('recomID', 'desc') // Urutkan berdasarkan recomID secara menurun (terbaru di atas)
            ->first(); // Ambil data pertama (terbaru)

        // Return the response to the view with the recommendation
        return view('recommendation', ['foodrecom' => $rekomendasi->foodrecom, 'exerrecom' => $rekomendasi->exerrecom]);
    }
}
