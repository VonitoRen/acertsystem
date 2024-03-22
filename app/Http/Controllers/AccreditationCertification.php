<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AccreditationCertificationModel;
use App\Models\Professions;
use App\Models\Signatories;

class AccreditationCertification extends Controller
{
    public function index(){
        $accreditationCert = AccreditationCertificationModel::all();
        $signatories = Signatories::all();

        $professions = Professions::all();

        return view('registration.accreditation', [
            'accreditationCert' => $accreditationCert,
            'signatories' => $signatories,
            'professions' => $professions,
        ]);
    }
    
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'lname' => 'required|string|max:255',
            'fname' => 'required|string|max:255',
            'mname' => 'nullable|string|max:255',
            'suffix' => 'nullable|string|max:255',
            'sex' => 'required|in:MALE,FEMALE',
            'accreditation_no' => 'required|string|max:255',
            'professionID' => 'required|exists:professions,id',
            'validityDate' => 'required|date',
            'broker_name' => 'nullable|string|max:255',
            'broker_reg_no' => 'nullable|string|max:255',
            'signatoriesid' => 'required|exists:signatories,id',
        ]);

        // Create a new Certificate instance
        $certificate = new AccreditationCertificationModel();

        // Assign values from the validated data
        $certificate->lname = $validatedData['lname'];
        $certificate->fname = $validatedData['fname'];
        $certificate->mname = $validatedData['mname'];
        $certificate->suffix = $validatedData['suffix'];
        $certificate->sex = $validatedData['sex'];
        $certificate->accreditation_no = $validatedData['accreditation_no'];
        $certificate->professionID = $validatedData['professionID'];
        $certificate->validityDate = $validatedData['validityDate'];
        $certificate->broker_name = $validatedData['broker_name'];
        $certificate->broker_reg_no = $validatedData['broker_reg_no'];
        $certificate->signatoriesid = $validatedData['signatoriesid'];

        // Assign default values for fields already set in the database
        $certificate->date_issues = now(); // Set the current timestamp
        $certificate->placeOfIssue = "Baguio City, Philippines";

        // Save the Certificate
        $certificate->save();

        // Redirect the user after successfully saving the certificate
        return redirect()->back()->with('success', 'Certificate added successfully.');
    }

    public function editACCertificate($id)
    {
        $cert = AccreditationCertificationModel::findOrFail($id);
        $professions = Professions::all();
        $signatories = Signatories::all();

        return view('edit_certificate', compact('cert', 'professions', 'signatories'));
    }

    public function updateACCertificate(Request $request, $id)
    {
        $certificate = AccreditationCertificationModel::findOrFail($id);

        // dd($request->all());
        $validatedData = $request->validate([
            'accreditation_no' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'fname' => 'required|string|max:255',
            'mname' => 'nullable|string|max:255',
            'suffix' => 'nullable|string|max:255',
            'sex' => 'required|in:MALE,FEMALE',
            'professionID' => 'required|exists:professions,id',
            'validityDate' => 'required|date',
            'broker_name' => 'nullable|string|max:255',
            'broker_reg_no' => 'nullable|string|max:255',
            'signatoriesid' => 'required|exists:signatories,id',
        ]);

        // Update the certificate with the validated data
        $certificate->update($validatedData);

        return redirect()->back()->with('success', 'Certificate updated successfully');
    }


     public function deleteCertificate($id)
    {
        // Find the certification by ID
        $certificate = AccreditationCertificationModel::findOrFail($id);

        // Delete the certification
        $certificate->delete();

        // Redirect back or wherever you want
        return redirect()->back()->with('success', 'Certificate deleted successfully');
    }


}
