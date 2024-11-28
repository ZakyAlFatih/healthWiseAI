<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function showExercise()
    {

        //dd($siswa);
        return view('Login');
    }
}
