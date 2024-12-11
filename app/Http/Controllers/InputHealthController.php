<?php

namespace App\Http\Controllers;
use App\Models\RiwayatKesehatan;
use Illuminate\Http\Request;

class InputHealthController extends Controller
{
    function showInputHealth()
    {


        return view('Input-Personal');
    }
    function showInputHealthDailyAct()
    {


        return view('Input-DailyAct');
    }
    function showInputHealthDiet()
    {


        return view('Input-Diet');
    }

    public function store(Request $request)
{
    // Ambil userID dari pengguna yang sedang login
    $user = auth()->user(); // Pastikan pengguna sudah login

    if (!$user) {
        return redirect()->back()->withErrors('You must be logged in to submit health data.');
    }
    $userID = $user->userID; // Sesuaikan dengan nama kolom yang digunakan untuk ID user

    // Validasi data
    $validatedData = $request->validate([
        'weight' => 'nullable|numeric',
        'height' => 'nullable|numeric',
        'gender' => 'required|in:Male,Female,Other',
        'health_history' => 'nullable|array',
        'symptoms' => 'nullable|array',
        'activity_level' => 'nullable|string',
        'step_count' => 'nullable|numeric',
        'sleep_duration' => 'nullable|numeric',
        'physical_activity' => 'nullable|array',
        'calories_burned' => 'nullable|numeric',
        'sedentary_time' => 'nullable|numeric',
        'water_intake' => 'nullable|numeric',
        'meal_log' => 'nullable|string',
        'mood_level' => 'nullable|numeric',
    ]);
    // Tambahkan userID ke data yang akan disimpan
    $validatedData['userID'] = $userID;

    // Format array menjadi JSON
    $validatedData['health_history'] = $request->has('health_history') ? json_encode($request->health_history) : null;
    $validatedData['symptoms'] = $request->has('symptoms') ? json_encode($request->symptoms) : null;
    $validatedData['physical_activity'] = $request->has('physical_activity') ? json_encode($request->physical_activity) : null;

     // Untuk melihat data yang tervalidasi

    // Simpan data ke database
    RiwayatKesehatan::create($validatedData);

    // Redirect ke landing page setelah berhasil
    return redirect('/featurepage')->with('success', 'Health data has been saved successfully.');
}
}