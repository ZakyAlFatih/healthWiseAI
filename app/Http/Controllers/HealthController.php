<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HealthController extends Controller
{
    function showHealth()
    {

        //dd($siswa);
        return view('Health');
    }
}
