<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class healthWiseController extends Controller
{
    function tampil()
    {

        //dd($siswa);
        return view('healthWise.tampil');
    }
}
