<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormerFilipinoCertificationModel;
use App\Models\Professions;
use App\Models\Signatories;
use App\Models\PersonRole;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Support\Facades\View;

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
        // return redirect()->back()->with('success', 'Certificate added successfully.');
        // return $this->previewPdf($certificate->id);
        return redirect()->back()->with('success', 'Certificate added successfully.');
    }

    public function previewPdf($id)
    {
        // Get the specific certification record by ID
        $formerfilipinoCert = FormerFilipinoCertificationModel::findOrFail($id);

        $imageUrl = 'https://resaadvocates.com/wp-content/uploads/2019/06/prc-logo.png';

        // Render the view into HTML, passing the certification record
        $html = view('formerfilipino', compact('formerfilipinoCert', 'imageUrl'))->render();

        // Configure Dompdf
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true); // Enable HTML5 parser
        $options->set('isRemoteEnabled', true); // Enable remote file access

        // Instantiate Dompdf with options
        $pdf = new Dompdf($options);

        // Load HTML content with specified encoding
        $pdf->loadHtml(mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8'));

        // Set paper size and orientation
        $pdf->setPaper([0, 0, 612, 936], 'portrait'); // 8.5" x 13" in portrait orientation

        // Render PDF (errors are stored in $pdf->errors)
        $pdf->render();

        // Get the PDF content as a string
        $pdfContent = $pdf->output();

        // Encode the PDF content
        $base64Pdf = base64_encode($pdfContent);

        // Pass the encoded PDF content to the view
        return view('preview-formerfilipino-pdf', compact('base64Pdf'));
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
