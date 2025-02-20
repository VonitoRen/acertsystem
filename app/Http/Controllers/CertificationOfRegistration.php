<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CertificationsOfRegistration;
use App\Models\Professions;
use App\Models\Signatories;
use App\Models\PersonRole;
use App\Models\AccreditationCertificationModel;
use App\Models\FormerFilipinoCertificationModel;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Support\Facades\View;

use TCPDF;

use Illuminate\Support\Facades\File;

class CertificationOfRegistration extends Controller
{

    public function report()
    {
        $certificationOfRegistrations = CertificationsOfRegistration::all();
        $accreditationCert = AccreditationCertificationModel::all();
        $formerfilipinoCert = FormerFilipinoCertificationModel::all();
        
        return view('registration.report', [
            'certificationOfRegistrations' => $certificationOfRegistrations,
            'accreditationCert' => $accreditationCert,
            'formerfilipinoCert' => $formerfilipinoCert,
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
            'professionID' => 'required|string|max:255',
            'regnum' => 'required|string|max:255',
            'registeredDate' => 'required|date',
            'person_role_id' => 'required|exists:person_roles,id',
            'sex' => 'required|string|in:MALE,FEMALE', // Add this line for sex validation
        ]);


        // Create a new Certificate instance
        $certificate = new CertificationsOfRegistration();

        // Assign values from the validated data
        $certificate->lname = $validatedData['lname'];
        $certificate->fname = $validatedData['fname'];
        $certificate->mname = $validatedData['mname'];
        $certificate->suffix = $validatedData['suffix'];
        $certificate->sex = $validatedData['sex'];
        $certificate->professionID = $validatedData['professionID'];
        $certificate->regnum = $validatedData['regnum'];
        $certificate->registeredDate = $validatedData['registeredDate'];
        $certificate->person_role_id = $validatedData['person_role_id'];

        // Save the Certificate
        $certificate->save();

        // Redirect the user after successfully saving the certificate
        // return $this->previewPdf($certificate->id);
        return redirect()->back()->with('success', 'Certificate added successfully.');
            // return redirect()->back()->with('success', 'Certificate added successfully.')
            //                  ->with('refresh', true)
            //                  ->with('certificate_id', $certificate->id);
        // return redirect()->back()->with('success', 'Certificate added successfully.')->with('refresh', true)->with('certificate_id', $certificate->id);
    // return redirect()->route('preview.pdf', $certificate->id)->with('success', 'Certificate added successfully.');
// return redirect()->back()->with('success', 'Certificate added successfully.')->with('refresh', true);

    }

    public function previewPdf($id)
    {
    // Get the specific certification record by ID
    $certificationOfRegistrations = CertificationsOfRegistration::findOrFail($id);

    // URL of the image
    $imageUrl = 'https://resaadvocates.com/wp-content/uploads/2019/06/prc-logo.png';

    // $imageUrl = '/img/image001.png';
    // Render the view into HTML, passing the certification record and image URL
    $html = view('cor', compact('certificationOfRegistrations', 'imageUrl'))->render();

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


    //EDIT FUNCTION
    //EDIT FUNCTION
    //EDIT FUNCTION

    public function editCORCertificate($id)
    {
        $cert = CertificationsOfRegistration::findOrFail($id);
        $professions = Professions::all();
        $signatories = Signatories::all();

        return view('edit_certificate', compact('cert', 'professions', 'signatories'));
    }


    public function updateCORCertificate(Request $request, $id)
    {
        $certificate = CertificationsOfRegistration::findOrFail($id);
        $validatedData = $request->validate([
            'lname' => 'required|string|max:255',
            'fname' => 'required|string|max:255',
            'mname' => 'nullable|string|max:255',
            'suffix' => 'nullable|string|max:255',
            'professionID' => 'required|exists:professions,id',
            'regnum' => 'required|string|max:255',
            // 'registeredDate' => 'required|date',
            'date_issues' => 'required|date',
            'person_role_id' => 'required|exists:person_roles,id',
            'sex' => 'required|string|in:MALE,FEMALE',
    ]);

    $certificate->update($validatedData);

    return redirect()->back()->with('success', 'Certificate updated successfully');
    }


    public function deleteCertificate($id)
    {
        // Find the certification by ID
        $certificate = CertificationsOfRegistration::findOrFail($id);

        // Delete the certification
        $certificate->delete();

        // Redirect back or wherever you want
        return redirect()->back()->with('success', 'Certificate deleted successfully');
    }
}
