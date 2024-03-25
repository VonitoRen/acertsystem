<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professions;
use App\Models\Signatories;

class LegalCertification extends Controller
{
    public function dashboard(){
        $signatories = Signatories::all();

        $professions = Professions::all();

        return view('legal.dashboard', [
            'signatories' => $signatories,
            'professions' => $professions,
        ]);
    }
}
