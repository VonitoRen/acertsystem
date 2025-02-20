<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormerFilipinoCertificationModel;
use App\Models\Professions;
use App\Models\Signatories;
use App\Models\PersonRole;

class FormerFilipinoController extends Controller
{
    public function index(){
        $formerfilipinoCert = FormerFilipinoCertificationModel::all();
        $signatories = Signatories::all();
        $professions = Professions::all();

        // Filter the personRoles based on role_id
        $personRoles = PersonRole::with('person')
            ->where('role_id', 2)
            ->get();
        
        return view('registration.formerfilipino', [
            'formerfilipinoCert' => $formerfilipinoCert,
            'signatories' => $signatories,
            'professions' => $professions,
            'personRoles' => $personRoles,
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
            'sex' => 'required|string|in:MALE,FEMALE', // Add this line for sex validation
            'professionID' => 'required|string|max:255',
            'licenseNo' => 'required|string|max:255',
            'dateIssued' => 'required|date',
            'purpose' => 'required|string|max:255',
            // 'dateOfIssuance' => 'required|date',
            'person_role_id' => 'required|exists:person_roles,id',
            'orNo' => 'required|string|max:255',
            'orDate' => 'required|date',
        ]);


        // Create a new Certificate instance
        $certificate = new FormerFilipinoCertificationModel();

        // Assign values from the validated data
        $certificate->lname = $validatedData['lname'];
        $certificate->fname = $validatedData['fname'];
        $certificate->mname = $validatedData['mname'];
        $certificate->suffix = $validatedData['suffix'];
        $certificate->sex = $validatedData['sex'];
        $certificate->professionID = $validatedData['professionID'];
        $certificate->licenseNo = $validatedData['licenseNo'];
        $certificate->dateIssued = $validatedData['dateIssued'];
        $certificate->purpose = $validatedData['purpose'];
        $certificate->dateOfIssuance = now(); 
        $certificate->person_role_id = $validatedData['person_role_id'];
        $certificate->orNo = $validatedData['orNo'];
        $certificate->orDate = $validatedData['orDate'];

        // Save the Certificate
        $certificate->save();

        // Redirect the user after successfully saving the certificate
        return redirect()->back()->with('success', 'Certificate added successfully.');
    }


    //EDIT FUNCTION
    //EDIT FUNCTION
    //EDIT FUNCTION

    public function editFORMERFILIPINOCertificate($id)
    {
        $cert = FormerFilipinoCertificationModel::findOrFail($id);
        $professions = Professions::all();
        $signatories = Signatories::all();

        return view('edit_certificate', compact('cert', 'professions', 'signatories'));
    }


    public function updateFORMERFILIPINOCertificate(Request $request, $id)
    {
        $certificate = FormerFilipinoCertificationModel::findOrFail($id);
        $validatedData = $request->validate([
            'lname' => 'required|string|max:255',
            'fname' => 'required|string|max:255',
            'mname' => 'nullable|string|max:255',
            'suffix' => 'nullable|string|max:255',
            'sex' => 'required|string|in:MALE,FEMALE', // Add this line for sex validation
            'professionID' => 'required|string|max:255',
            'licenseNo' => 'required|string|max:255',
            'dateIssued' => 'required|date',
            'purpose' => 'required|string|max:255',
            'dateOfIssuance' => 'required|date',
            'person_role_id' => 'required|exists:person_roles,id',
            'orNo' => 'required|string|max:255',
            'orDate' => 'required|date',
    ]);

    $certificate->update($validatedData);

    return redirect()->back()->with('success', 'Certificate updated successfully');
    }


    public function deleteCertificate($id)
    {
        // Find the certification by ID
        $certificate = FormerFilipinoCertificationModel::findOrFail($id);

        // Delete the certification
        $certificate->delete();

        // Redirect back or wherever you want
        return redirect()->back()->with('success', 'Certificate deleted successfully');
    }
}
