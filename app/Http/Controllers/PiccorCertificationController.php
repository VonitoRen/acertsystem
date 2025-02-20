<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PicCorCertificationModel;
use App\Models\Signatories;
use App\Models\Professions;

class PiccorCertificationController extends Controller
{
    public function index(){
        $piccorCert = PicCorCertificationModel::all();
        $signatories = Signatories::all();
        $professions = Professions::all();

        $personRoles = PersonRole::with('person')
        ->where('role_id', 3)
        ->get();
        
        return view('legal.piccor', [
            'piccorCert' => $piccorCert,
            'signatories' => $signatories,
            'professions' => $professions,
            'personRoles' => $personRoles,
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'board'=> 'required|string|max:255',
            'regDate'=> 'required|string|max:255',
            'lname'=> 'required|string|max:255',
            'fname'=> 'required|string|max:255',
            'mname'=> 'nullable|string|max:255',
            'suffix'=> 'nullable|string|max:255',
            'sex'=> 'required|in:MALE,FEMALE',
            'professionID'=> 'required|string|max:255',
            'regNo'=> 'required|string|max:255',
            'returnedDate'=> 'required|date',
            'penalty'=> 'required|string|max:255',
            'caseTitle'=> 'required|string|max:255',
            'administrativeCaseNo'=> 'required|string|max:255',
            'dateOfDocument'=> 'required|string|max:255',
            'hearingOfficer'=> 'required|string|max:255',
            'person_role_id' => 'required|exists:person_roles,id',
            'complainantlname'=> 'required|string|max:255',
            'complainantfname'=> 'required|string|max:255',
            'complainantmname'=> 'nullable|string|max:255',
            'complainantsuffix'=> 'nullable|string|max:255',
            'complainantsex'=> 'required|in:MALE,FEMALE',
            'legalDivisionChief'=> 'required|string|max:255',
            'position_officer'=> 'required|string|max:255',
        ]);

        // Create a new Certificate instance
        $certificate = new PicCorCertificationModel();

        // Assign values from the validated data
        $certificate->board = $validatedData['board'];
        $certificate->regDate = $validatedData['regDate'];
        $certificate->lname = $validatedData['lname'];
        $certificate->fname = $validatedData['fname'];
        $certificate->mname = $validatedData['mname'];
        $certificate->suffix = $validatedData['suffix'];
        $certificate->sex = $validatedData['sex'];
        $certificate->professionID = $validatedData['professionID'];
        $certificate->regNo = $validatedData['regNo'];
        $certificate->returnedDate = $validatedData['returnedDate'];
        $certificate->penalty = $validatedData['penalty'];
        $certificate->caseTitle = $validatedData['caseTitle'];
        $certificate->administrativeCaseNo = $validatedData['administrativeCaseNo'];
        $certificate->dateOfDocument = $validatedData['dateOfDocument'];
        $certificate->hearingOfficer = $validatedData['hearingOfficer'];
        $certificate->person_role_id = $validatedData['person_role_id'];
        $certificate->complainantlname = $validatedData['complainantlname'];
        $certificate->complainantfname = $validatedData['complainantfname'];
        $certificate->complainantmname = $validatedData['complainantmname'];
        $certificate->complainantsuffix = $validatedData['complainantsuffix'];
        $certificate->complainantsex = $validatedData['complainantsex'];
        $certificate->legalDivisionChief = $validatedData['legalDivisionChief'];
        $certificate->position_officer = $validatedData['position_officer'];

        $certificate->dateofIssuance = now(); 

        // Save the Certificate
        $certificate->save();

        // Redirect the user after successfully saving the certificate
        return redirect()->back()->with('success', 'Certificate added successfully.');
    }

    public function editPiccorCertificate($caseNo)
    {
        $cert = PicCorCertificationModel::findOrFail($caseNo);
        $signatories = Signatories::all();

        return view('edit_certificate', compact('cert', 'signatories'));
    }

    public function updatePiccorCertificate(Request $request, $caseNo)
    {
        $certificate = PicCorCertificationModel::findOrFail($caseNo);

        // dd($request->all());
        $validatedData = $request->validate([
            'board'=> 'required|string|max:255',
            'regDate'=> 'required|date',
            'lname'=> 'required|string|max:255',
            'fname'=> 'required|string|max:255',
            'mname'=> 'nullable|string|max:255',
            'suffix'=> 'nullable|string|max:255',
            'sex'=> 'required|in:MALE,FEMALE',
            'professionID'=> 'required|string|max:255',
            'regNo'=> 'required|string|max:255',
            'returnedDate'=> 'required|date',
            'penalty'=> 'required|string|max:255',
            'caseTitle'=> 'required|string|max:255',
            'administrativeCaseNo'=> 'required|string|max:255',
            'dateOfDocument'=> 'required|string|max:255',
            'dateofIssuance' => 'required|date',
            'hearingOfficer'=> 'required|string|max:255',
            'person_role_id' => 'required|exists:person_roles,id',
            'complainantlname'=> 'required|string|max:255',
            'complainantfname'=> 'required|string|max:255',
            'complainantmname'=> 'nullable|string|max:255',
            'complainantsuffix'=> 'nullable|string|max:255',
            'complainantsex'=> 'required|in:MALE,FEMALE',
            'legalDivisionChief'=> 'required|string|max:255',
            'position_officer'=> 'required|string|max:255',
        ]);

        // Update the certificate with the validated data
        $certificate->update($validatedData);

        return redirect()->back()->with('success', 'Certificate updated successfully');
    }


     public function deleteCertificate($caseNo)
    {
        // Find the certification by ID
        $certificate = PicCorCertificationModel::findOrFail($caseNo);

        // Delete the certification
        $certificate->delete();

        // Redirect back or wherever you want
        return redirect()->back()->with('success', 'Certificate deleted successfully');
    }


}
