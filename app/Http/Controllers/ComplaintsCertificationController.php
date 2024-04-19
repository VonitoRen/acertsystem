<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Professions;
use App\Models\Signatories;
use App\Models\PersonRole;

use App\Models\ComplaintsCertificationModel;

class ComplaintsCertificationController extends Controller
{
    public function dashboard(){
        $complaintCert = ComplaintsCertificationModel::all();
        // $complaintCert = ComplaintsCertificationModel::with('signatoriesAtty', 'signatoriesid')->get();
        $signatories = Signatories::all();
        $professions = Professions::all();

        return view('legal.dashboard', [
            'complaintCert' => $complaintCert,
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
            'professionID' => 'required|exists:professions,id',
            'regnum' => 'required|string|max:255',
            'registeredDate' => 'required|date',
            'OR_No' => 'required|string|max:255',
            'initials' => 'required|string|max:255',
            'amount' => 'required|string|max:255',
            'signatoriesAtty' => 'required|exists:person_roles,id',
            'person_role_id' => 'required|exists:person_roles,id',
        ]);

        // Create a new Certificate instance
        $certificate = ComplaintsCertificationModel::create($validatedData);

        if ($certificate) {
            // Data saved successfully
            return redirect()->back()->with('success', 'Certificate added successfully.');
        } else {
            // Error occurred while saving data
            return redirect()->back()->with('error', 'Failed to add certificate. Please try again.');
        }
    }


    // public function store(Request $request)
    // {
    //     // Validate the incoming request data
    //     $validatedData = $request->validate([
    //         'lname' => 'required|string|max:255',
    //         'fname' => 'required|string|max:255',
    //         'mname' => 'nullable|string|max:255',
    //         'suffix' => 'nullable|string|max:255',
    //         'sex' => 'required|in:MALE,FEMALE',
    //         'professionID' => 'required|exists:professions,id',
    //         'regnum' => 'required|string|max:255',
    //         'registeredDate' => 'required|date',
    //         'OR_No' => 'required|string|max:255',
    //         'initials' => 'required|string|max:255',
    //         'amount' => 'required|string|max:255',
    //         'signatoriesAtty' => 'required|exists:person_roles,id',
    //         // 'signatoriesid' => 'required|exists:signatories,id',
    //         'person_role_id' => 'required|exists:person_roles,id',
    //     ]);

    //     // Create a new Certificate instance
    //     $certificate = new ComplaintsCertificationModel();

    //     // Assign values from the validated data
    //     $certificate->fill($validatedData);

    //     // Assign default values for fields already set in the database
    //     $certificate->date_issues = now(); // Set the current timestamp

    //     // Save the Certificate
    //     $certificate->save();

    //     // Redirect the user after successfully saving the certificate
    //     return redirect()->back()->with('success', 'Certificate added successfully.');
    // }

    public function editComplaintCertificate($id)
    {
        $cert = ComplaintsCertificationModel::findOrFail($id);
        $professions = Professions::all();
        $signatories = Signatories::all();

        return view('edit_certificate', compact('cert', 'professions', 'signatories'));
    }

    public function updateComplaintCertificate(Request $request, $id)
    {
        $certificate = ComplaintsCertificationModel::findOrFail($id);

        // dd($request->all());
        $validatedData = $request->validate([
            'lname' => 'required|string|max:255',
            'fname' => 'required|string|max:255',
            'mname' => 'nullable|string|max:255',
            'suffix' => 'nullable|string|max:255',
            'sex' => 'required|in:MALE,FEMALE',
            'professionID' => 'required|exists:professions,id',
            'regnum' => 'required|string|max:255',
            'registeredDate' => 'required|date',
            'OR_No' => 'required|string|max:255',
            'initials' => 'required|string|max:255',
            'amount' => 'required|string|max:255',
            'signatoriesAtty' => 'required|exists:person_roles,id',
            // 'signatoriesid' => 'required|exists:signatories,id',
            'person_role_id' => 'required|exists:person_roles,id',
        ]);

        // Update the certificate with the validated data
        $certificate->update($validatedData);

        return redirect()->back()->with('success', 'Certificate updated successfully');
    }


     public function deleteCertificate($id)
    {
        // Find the certification by ID
        $certificate = ComplaintsCertificationModel::findOrFail($id);

        // Delete the certification
        $certificate->delete();

        // Redirect back or wherever you want
        return redirect()->back()->with('success', 'Certificate deleted successfully');
    }
}