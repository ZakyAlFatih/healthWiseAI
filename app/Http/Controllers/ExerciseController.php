<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    function showExercise()
    {

        //dd($siswa);
        return view('Exercise');
    }
}
