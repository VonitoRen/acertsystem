<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Support\Facades\View;
use App\Models\SurrenderedDocuments;

class DocumentSurrenderedController extends Controller
{
    public function dashboard(){
        $surrenderedCert = SurrenderedDocuments::all();
        $signatories = Signatories::all();
        $professions = Professions::all();

        return view('legal.dashboard', [
            'surrenderedCert' => $surrenderedCert,
            'signatories' => $signatories,
            'professions' => $professions,
        ]);
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'doc_surrendered' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'fname' => 'required|string|max:255',
            'mname' => 'nullable|string|max:255',
            'suffix' => 'nullable|string|max:255',
            'sex' => 'required|in:MALE,FEMALE',
            'professionID' => 'required|exists:professions,id',
            'returnedDate' => 'required|date',
            'penalty' => 'required|string|max:255',
            'case_title' => 'required|string|max:255',
            'case_no' => 'required|string|max:255',
            'person_role_id' => 'required|exists:person_roles,id',
            'hearing_officer' => 'required|string|max:255',
            'complainant_lname' => 'required|string|max:255',
            'complainant_fname' => 'required|string|max:255',
            'complainant_mname' => 'nullable|string|max:255',
            'complainant_suffix' => 'nullable|string|max:255',
            'complainant_sex' => 'required|in:MALE,FEMALE',
            'chief' => 'required|string|max:255',
        ]);

        // Create a new Certificate instance
        $certificate = new SurrenderedDocuments();

        // Assign values from the validated data
        $certificate->fill($validatedData);

        // Assign default values for fields already set in the database
        $certificate->date_issues = now(); // Set the current timestamp

        // Save the Certificate
        $certificate->save();

        // Redirect the user after successfully saving the certificate
        return redirect()->back()->with('success', 'Certificate added successfully.');
    }
}
