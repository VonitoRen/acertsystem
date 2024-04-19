<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AccreditationCertificationModel;
use App\Models\Professions;
use App\Models\Signatories;
use App\Models\PersonRole;

class FormerFilipinoController extends Controller
{
    public function index(){
        $accreditationCert = AccreditationCertificationModel::all();
        $signatories = Signatories::all();

        $professions = Professions::all();

        // Filter the personRoles based on role_id
        $personRoles = PersonRole::with('person')
            ->where('role_id', 2)
            ->get();
        

        return view('registration.accreditation', [
            'accreditationCert' => $accreditationCert,
            'signatories' => $signatories,
            'professions' => $professions,
            'personRoles' => $personRoles,
        ]);
        
    }
}
