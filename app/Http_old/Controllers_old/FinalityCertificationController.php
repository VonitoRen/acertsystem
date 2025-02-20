<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FinalityCertificationModel;
use App\Models\Signatories;

class FinalityCertificationController extends Controller
{
    public function index(){
        $finalityCert = FinalityCertificationModel::all();
        $signatories = Signatories::all();

        return view('legal.finality', [
            'finalityCert' => $finalityCert,
            'signatories' => $signatories,
        ]);
    }
    
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'board' => 'required|string|max:255',
            'complainants' => 'required|string|max:255',
            'respondents' => 'required|string|max:255',
            'for_' => 'required|string|max:255',
            'caseNo' => 'required|string|max:255',
            'caseDate' => 'required|date',
            'description' => 'required|string',
            'finalAndExecutoryDate' => 'required|date',
            // 'dateDate' => 'required|date',
            'signatoriesid' => 'required|exists:signatories,id',
        ]);

        // Create a new Certificate instance
        $certificate = new FinalityCertificationModel();

        // Assign values from the validated data
        $certificate->board = $validatedData['board'];
        $certificate->complainants = $validatedData['complainants'];
        $certificate->respondents = $validatedData['respondents'];
        $certificate->for_ = $validatedData['for_'];
        $certificate->caseNo = $validatedData['caseNo'];
        $certificate->caseDate = $validatedData['caseDate'];
        $certificate->description = $validatedData['description'];
        $certificate->finalAndExecutoryDate = $validatedData['finalAndExecutoryDate'];
        $certificate->dateDate = $validatedData['dateDate'];
        $certificate->signatoriesid = $validatedData['signatoriesid'];

        $certificate->dateDate = now(); 

        // Save the Certificate
        $certificate->save();

        // Redirect the user after successfully saving the certificate
        return redirect()->back()->with('success', 'Certificate added successfully.');
    }

    public function editFinalityCertificate($caseNo)
    {
        $cert = FinalityCertificationModel::findOrFail($caseNo);
        $signatories = Signatories::all();

        return view('edit_certificate', compact('cert', 'signatories'));
    }

    public function updateFinalityCertificate(Request $request, $caseNo)
    {
        $certificate = FinalityCertificationModel::findOrFail($caseNo);

        // dd($request->all());
        $validatedData = $request->validate([
            'board' => 'required|string|max:255',
            'complainants' => 'required|string|max:255',
            'respondents' => 'required|string|max:255',
            'for_' => 'required|string|max:255',
            'caseNo' => 'required|string|max:255',
            'caseDate' => 'required|date',
            'description' => 'required|string',
            'finalAndExecutoryDate' => 'required|date',
            'dateDate' => 'required|date',
            'signatoriesid' => 'required|exists:signatories,id',
        ]);
        $validatedData['date_issues'] = now(); 

        // Update the certificate with the validated data
        $certificate->update($validatedData);

        return redirect()->back()->with('success', 'Certificate updated successfully');
    }


     public function deleteCertificate($caseNo)
    {
        // Find the certification by ID
        $certificate = FinalityCertificationModel::findOrFail($caseNo);

        // Delete the certification
        $certificate->delete();

        // Redirect back or wherever you want
        return redirect()->back()->with('success', 'Certificate deleted successfully');
    }


}
