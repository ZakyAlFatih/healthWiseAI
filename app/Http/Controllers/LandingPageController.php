<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    function showLandingPage()
    {

        //dd($siswa);
        return view('LandingPage');
    }
}
