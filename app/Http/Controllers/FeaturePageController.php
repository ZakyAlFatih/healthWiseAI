<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RiwayatKesehatan;

class FeaturePageController extends Controller
{
    public function showFeaturePage(Request $request)
    {
        $userID = auth()->id();
        
        $laporanHarian = RiwayatKesehatan::where('userID', $userID)
            ->whereDate('created_at', now()->toDateString())
            ->get();

        $isHealthData = $laporanHarian->isNotEmpty();

        return view('FeaturePage', compact('isHealthData'));
    }
}
