<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodController extends Controller
{
    function showFood()
    {

        //dd($siswa);
        return view('Food');
    }
}
