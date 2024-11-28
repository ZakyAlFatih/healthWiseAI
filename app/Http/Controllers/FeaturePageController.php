<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeaturePageController extends Controller
{
    function showFeaturePage()
    {

        //dd($siswa);
        return view('FeaturePage');
    }
}
