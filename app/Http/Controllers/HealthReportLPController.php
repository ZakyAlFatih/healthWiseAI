<?php

namespace App\Http\Controllers;
use App\Models\RiwayatKesehatan;
use App\Models\LaporanKesehatan;
use Illuminate\Http\Request;

class HealthReportLPController extends Controller
{
    public function showDaily(Request $request)
{
    $user = auth()->user();

    if (!$user) {
        return redirect()->back()->withErrors('You must be logged in to submit health data.');
    }

    $userID = $user->userID;

    $laporanHarian = RiwayatKesehatan::where('userID', $userID)
                                ->whereDate('created_at', now()->toDateString())
                                ->get();

    if ($laporanHarian) {
        $totalLangkah = $laporanHarian->sum('step_count');
        $totalAirMinum = $laporanHarian->sum('water_intake');
        $totalKalori = $laporanHarian->sum('calories_burned');
        $totalTidur = $laporanHarian->sum('sleep_duration');
        foreach ($laporanHarian as $laporan) {
            $dailyGoalCompletion = 0;
            if ($laporan->sleep_duration >= 7) {
                $dailyGoalCompletion += 25;
            }
            if ($laporan->calories_burned >= 1000) {
                $dailyGoalCompletion += 25;
            }
            if ($laporan->water_intake >= 8) {
                $dailyGoalCompletion += 25;
            }
            if ($laporan->step_count >= 1000) {
                $dailyGoalCompletion += 25;
            }
        }
        return view('dailyHealthReport', [
            'goalCompletion' => $dailyGoalCompletion, 
            'sleepDuration' => $totalTidur,
            'calorieBurned' => $totalKalori,
            'hydrationProgress' => $totalAirMinum,
            'stepCount' =>$totalLangkah,
        ]);
    } else {
        return redirect()->back()->with('error', 'Data laporan kesehatan tidak ditemukan.');
    }
}


    

public function showMonthly(Request $request)
{
    $user = auth()->user();

    if (!$user) {
        return redirect()->back()->withErrors('You must be logged in to submit health data.');
    }

    $userID = $user->userID;

    $laporanBulanan = RiwayatKesehatan::where('userID', $userID)
                                    ->whereMonth('created_at', now()->month)
                                    ->whereYear('created_at', now()->year)
                                    ->get();

    if ($laporanBulanan->isNotEmpty()) {
        $totalLangkah = $laporanBulanan->sum('step_count');
        $totalAirMinum = $laporanBulanan->sum('water_intake');
        $totalKalori = $laporanBulanan->sum('calories_burned');
        $totalTidur = $laporanBulanan->sum('sleep_duration');
        $totalSedentary = $laporanBulanan->sum('sedentary_time');
        $totalMood = $laporanBulanan->sum('mood_level');

        $achievement = 0;

        foreach ($laporanBulanan as $laporan) {
            $dailyGoalCompletion = 0;
            $max_step = $laporan->step_count;
            if ($laporan->sleep_duration >= 7) {
                $dailyGoalCompletion += 25;
            }
            if ($laporan->calories_burned >= 1000) {
                $dailyGoalCompletion += 25;
            }
            if ($laporan->water_intake >= 8) {
                $dailyGoalCompletion += 25;
            }
            if ($laporan->step_count >= 1000) {
                $dailyGoalCompletion += 25;
            }

            if ($dailyGoalCompletion >= 100) {
                $achievement++;
            }

            if ($max_step < $laporan->step_count){
                $max_step = $laporan->step_count;
            }
        }
        $totalDaysInMonth = now()->daysInMonth; 
        $achievementPercentage = ($achievement / $totalDaysInMonth) * 100;


        return view('monthlyHealthReport', [
            'achievementPercentage' => round($achievementPercentage, 2),
            'totalSleepDuration' => $totalTidur,
            'totalCalorieBurned' => $totalKalori,
            'totalHydrationProgress' => $totalAirMinum,
            'totalStepCount' => $totalLangkah,
            'daysReported' => $laporanBulanan->count(), 
            'achievementDays' => $achievement, 
            'max_step' => $max_step,
            'totaldaysinmonth' => $totalDaysInMonth,
            'mood_level' => $totalMood,
            'sedentary' => $totalSedentary,
        ]);
    } else {
        return view('HealthReportLP');
    }
}




    public function showReport(Request $request)
{
        return view('HealthReportLP');
}
}
