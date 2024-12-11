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
        // Validasi data
        $validatedData = $request->validate([
            'userID' => 'required|string|max:50',
            'weight' => 'nullable|numeric',
            'height' => 'nullable|numeric',
            'gender' => 'required|in:Male,Female,Other',
            'health_history' => 'nullable|array',
            'symptoms' => 'nullable|array',
            'activity_level' => 'nullable|string',
        ]);

        // Format array menjadi JSON
        if ($request->has('health_history')) {
            $validatedData['health_history'] = json_encode($request->health_history);
        }

        if ($request->has('symptoms')) {
            $validatedData['symptoms'] = json_encode($request->symptoms);
        }

        // Simpan data ke database
        RiwayatKesehatan::create($validatedData);

        return redirect()->back()->with('success', 'Health data has been saved successfully.');
    }
}
