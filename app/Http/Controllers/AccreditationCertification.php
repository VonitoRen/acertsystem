<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AccreditationCertificationModel;
use App\Models\Professions;
use App\Models\Signatories;
use App\Models\PersonRole;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Support\Facades\View;
class AccreditationCertification extends Controller
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
            'person_role_id' => 'required|exists:person_roles,id',
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
        $certificate->person_role_id = $validatedData['person_role_id'];

        // Assign default values for fields already set in the database
        $certificate->date_issues = now(); // Set the current timestamp

        // Save the Certificate
        $certificate->save();

        // Redirect the user after successfully saving the certificate
        // return $this->previewPdf($certificate->id);
        return redirect()->back()->with('success', 'Certificate added successfully.');
        // return redirect()->back()->with('success', 'Certificate added successfully.');
    }
    public function previewPdf($id)
    {
    // Get the specific certification record by ID
    $accreditationCert = AccreditationCertificationModel::findOrFail($id);

    // URL of the image
    $imageUrl = 'https://resaadvocates.com/wp-content/uploads/2019/06/prc-logo.png';

    // $imageUrl = '/img/image001.png';
    // Render the view into HTML, passing the certification record and image URL
    $html = view('ac', compact('accreditationCert', 'imageUrl'))->render();

    // Configure Dompdf
    $options = new Options();
    $options->set('isHtml5ParserEnabled', true); // Enable HTML5 parser
    $options->set('isRemoteEnabled', true); // Enable remote file access

    // Instantiate Dompdf with options
    $pdf = new Dompdf($options);

    // Load HTML content
    $pdf->loadHtml($html);

    // (Optional) Set paper size and orientation
    $pdf->setPaper('A4', 'portrait');

    // Render PDF (errors are stored in $pdf->errors)
    $pdf->render();

    // Get the PDF content as a string
    $pdfContent = $pdf->output();

    // Encode the PDF content
    $base64Pdf = base64_encode($pdfContent);

    // Pass the encoded PDF content to the view
    return view('preview-pdf', compact('base64Pdf'));
    // return $this->previewPdf($certificateId)->with('success', 'Certificate added successfully.');
    // return view('preview-pdf', compact('base64Pdf'))->with('success', 'Certificate added successfully.');
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
            'broker_name' => 'required|string|max:255',
            'broker_reg_no' => 'required|string|max:255',
            'date_issues' => 'required|string|max:255',
            'person_role_id' => 'required|exists:person_roles,id',
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
