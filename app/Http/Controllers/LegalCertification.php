<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LegalCertification extends Controller
{
    public function dashboard(){
        return view('legal.dashboard');
    }
}
