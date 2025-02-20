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
            'board' => 'required|string|max:255',
            'doc_surrendered' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'fname' => 'required|string|max:255',
            'mname' => 'nullable|string|max:255',
            'suffix' => 'nullable|string|max:255',
            'sex' => 'required|in:MALE,FEMALE',
            'professionID' => 'required|exists:professions,id',
            'returnedDate' => 'required|date',
            'regnum' => 'required|string|max:255',
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
            'position_officer' => 'required|string|max:255',
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
    public function editDocSurrenderedCertificate($id)
    {
        $cert = SurrenderedDocuments::findOrFail($id);
        $professions = Professions::all();
        $signatories = Signatories::all();

        return view('edit_certificate', compact('cert', 'professions', 'signatories'));
    }

    public function updateDocSurrenderedCertificate(Request $request, $id)
    {
        $certificate = SurrenderedDocuments::findOrFail($id);

        // dd($request->all());
        $validatedData = $request->validate([
            'board' => 'required|string|max:255',
            'doc_surrendered' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'fname' => 'required|string|max:255',
            'mname' => 'nullable|string|max:255',
            'suffix' => 'nullable|string|max:255',
            'sex' => 'required|in:MALE,FEMALE',
            'professionID' => 'required|exists:professions,id',
            'date_issues' => 'required|date',
            'returnedDate' => 'required|date',
            'regnum' => 'required|string|max:255',
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
            'position_officer' => 'required|string|max:255',
        ]);

        // Update the certificate with the validated data
        $certificate->update($validatedData);

        return redirect()->back()->with('success', 'Certificate updated successfully');
    }
    public function deleteCertificate($id)
    {
        // Find the certification by ID
        $certificate = SurrenderedDocuments::findOrFail($id);

        // Delete the certification
        $certificate->delete();

        // Redirect back or wherever you want
        return redirect()->back()->with('success', 'Certificate deleted successfully');
    }
}
