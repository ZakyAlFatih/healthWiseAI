<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function showRegister()
    {

        //dd($siswa);
        return view('Register');
    }
}
