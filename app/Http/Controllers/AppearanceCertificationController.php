<?php

namespace App\Http\Controllers;
use App\Models\AppearanceCertification;
use App\Models\Professions;
use App\Models\Signatories;
use Illuminate\Http\Request;

class AppearanceCertificationController extends Controller
{
    public function dashboard(){
        
        $appearanceCert = AppearanceCertification::all();

        $signatories = Signatories::all();
        $professions = Professions::all();

        return view('fad.dashboard', [
                    'appearanceCert' => $appearanceCert,
                    'signatories' => $signatories,
                    'professions' => $professions,
        ]);
    }

    public function report(){
        
        $appearanceCert = AppearanceCertification::all();

        return view('fad.report', [
                    'appearanceCert' => $appearanceCert,
        ]);
    }

    // public function index(){
    //     $appearanceCert = AppearanceCertification::all();

    //     $signatories = Signatories::all();

    //     $professions = Professions::all();

    //     return view('appearance', [
    //         'appearanceCert' => $appearanceCert,
    //         'signatories' => $signatories,
    //         'professions' => $professions,
    //     ]);
    // }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'lname' => 'required|string|max:255',
            'fname' => 'required|string|max:255',
            'mname' => 'nullable|string|max:255',
            'suffix' => 'nullable|string|max:255',
            'sex' => 'required|in:MALE,FEMALE',
            'agency' => 'required|string|max:255',
            'dateOfAppearance' => 'required|date',
            'dateOfAppearance_two' => 'nullable|date',
            'purpose' => 'required|string|max:255',
            'person_role_id' => 'required|exists:person_roles,id',
        ]);

        $certificate = new AppearanceCertification();

        // Assign values from the validated data
        $certificate->lname = $validatedData['lname'];
        $certificate->fname = $validatedData['fname'];
        $certificate->mname = $validatedData['mname'];
        $certificate->suffix = $validatedData['suffix'];
        $certificate->sex = $validatedData['sex'];
        $certificate->agency = $validatedData['agency'];
        $certificate->dateOfAppearance = $validatedData['dateOfAppearance'];
        $certificate->dateOfAppearance_two = $validatedData['dateOfAppearance_two'];
        $certificate->purpose = $validatedData['purpose'];
        $certificate->person_role_id = $validatedData['person_role_id'];

        // Assign default values for fields already set in the database
        $certificate->date_issues = now(); 

        // Save the Certificate
        $certificate->save();

        // Redirect the user after successfully saving the certificate
        return redirect()->back()->with('success', 'Certificate added successfully.');
    }

     public function editAPCertificate($id)
    {
        $cert = AppearanceCertification::findOrFail($id);
        $professions = Professions::all();
        $signatories = Signatories::all();

        return view('edit_certificate', compact('cert', 'professions', 'signatories'));
    }

    public function updateAPCertificate(Request $request, $id)
    {
        $certificate = AppearanceCertification::findOrFail($id);

        $validatedData = $request->validate([
            'lname' => 'required|string|max:255',
            'fname' => 'required|string|max:255',
            'mname' => 'nullable|string|max:255',
            'suffix' => 'nullable|string|max:255',
            'sex' => 'required|in:MALE,FEMALE',
            'agency' => 'required|string|max:255',
            'date_issues' => 'required|date',
            'dateOfAppearance' => 'required|date',
            'dateOfAppearance_two' => 'nullable|date',
            'purpose' => 'required|string|max:255',
            'person_role_id' => 'required|exists:person_roles,id',
        ]);
        
        $certificate->update($validatedData);

        return redirect()->back()->with('success', 'Certificate updated successfully');
    }


     public function deleteCertificate($id)
    {
        // Find the certification by ID
        $certificate = AppearanceCertification::findOrFail($id);

        // Delete the certification
        $certificate->delete();

        // Redirect back or wherever you want
        return redirect()->back()->with('success', 'Certificate deleted successfully');
    }
}
