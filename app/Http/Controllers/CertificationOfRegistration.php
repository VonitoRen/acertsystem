<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CertificationOfRegistration extends Controller
{
    public function dashboard(){
        
        return view('registration.dashboard');
    }
}
