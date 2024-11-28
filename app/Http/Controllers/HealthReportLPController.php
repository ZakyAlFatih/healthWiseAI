<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HealthReportLPController extends Controller
{
    function showExercise()
    {

        //dd($siswa);
        return view('HealthReportLP');
    }
}
