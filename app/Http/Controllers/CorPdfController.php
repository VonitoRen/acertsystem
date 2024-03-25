<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Models\CertificationsOfRegistration;
use Illuminate\Support\Facades\View;

use TCPDF;

use Illuminate\Support\Facades\File;


class CorPdfController extends Controller
{
    
    // 
    


//     public function previewPdf($id)
// {
//     // Get the specific certification record by ID
//     $certificationOfRegistrations = CertificationsOfRegistration::findOrFail($id);

//     // Full path to the image
//     $imagePath = public_path('image/image001.png');

//     // Check if the image file exists
//     if (!file_exists($imagePath)) {
//         abort(404);
//     }

//     // Load the image into a base64 encoded string
//     $imageData = base64_encode(file_get_contents($imagePath));
//     $imageSrc = 'data:image/png;base64,' . $imageData;

//     // Render the view into HTML, passing the certification record and image source
//     $html = view('cor', compact('certificationOfRegistrations', 'imageSrc'))->render();

//     // Configure Dompdf
//     $options = new Options();
//     $options->set('isHtml5ParserEnabled', true); // Enable HTML5 parser
//     $options->set('isRemoteEnabled', true); // Enable remote file access

//     // Instantiate Dompdf with options
//     $pdf = new Dompdf($options);

//     // Load HTML content
//     $pdf->loadHtml($html);

//     // (Optional) Set paper size and orientation
//     $pdf->setPaper('A4', 'portrait');

//     // Render PDF (errors are stored in $pdf->errors)
//     $pdf->render();

//     // Get the PDF content as a string
//     $pdfContent = $pdf->output();

//     // Encode the PDF content
//     $base64Pdf = base64_encode($pdfContent);

//     // Pass the encoded PDF content to the view
//     return view('preview-pdf', compact('base64Pdf'));
// }


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
}



// public function previewPdf($id)
// {
//     // Get the specific certification record by ID
//     $certificationOfRegistrations = CertificationsOfRegistration::findOrFail($id);

//     // Render the image
//     $imagePath = public_path('image/image001.png');

//     // Check if the image file exists
//     if (!file_exists($imagePath)) {
//         abort(404);
//     }

//     // Load the image into a base64 encoded string
//     $imageData = base64_encode(file_get_contents($imagePath));
//     $imageSrc = 'data:image/png;base64,' . $imageData;

//     // Render the view into HTML, passing the certification record and image source
//     $html = View::make('cor', compact('certificationOfRegistrations', 'imageSrc'))->render();

//     // Configure Dompdf
//     $options = new Options();
//     $options->set('isHtml5ParserEnabled', true); // Enable HTML5 parser
//     $options->set('isRemoteEnabled', true); // Enable remote file access

//     // Instantiate Dompdf with options
//     $pdf = new Dompdf($options);

//     // Load HTML content
//     $pdf->loadHtml($html);

//     // (Optional) Set paper size and orientation
//     $pdf->setPaper('A4', 'portrait');

//     // Render PDF (errors are stored in $pdf->errors)
//     $pdf->render();

//     // Get the PDF content as a string
//     $pdfContent = $pdf->output();

//     // Encode the PDF content
//     $base64Pdf = base64_encode($pdfContent);

//     // Pass the encoded PDF content to the view
//     return view('preview-pdf', compact('base64Pdf'));
// }



// public function previewPdf($id)
// {
//     // Get the specific certification record by ID
//     $certificationOfRegistrations = CertificationsOfRegistration::findOrFail($id);

//     // Full path to the image
//     $imagePath = public_path('image/image001.png');

//     // Check if the image file exists
//     if (!file_exists($imagePath)) {
//         abort(404);
//     }

//     // Read the image data
//     $imageData = file_get_contents($imagePath);

//     // Render the view into HTML, passing the certification record
//     $html = view('cor', compact('certificationOfRegistrations', 'imageData'))->render();

//     // Configure Dompdf
//     $options = new Options();
//     $options->set('isHtml5ParserEnabled', true); // Enable HTML5 parser
//     $options->set('isRemoteEnabled', true); // Enable remote file access

//     // Instantiate Dompdf with options
//     $pdf = new Dompdf($options);

//     // Load HTML content
//     $pdf->loadHtml($html);

//     // (Optional) Set paper size and orientation
//     $pdf->setPaper('A4', 'portrait');

//     // Render PDF (errors are stored in $pdf->errors)
//     $pdf->render();

//     // Get the PDF content as a string
//     $pdfContent = $pdf->output();

//     // Encode the PDF content
//     $base64Pdf = base64_encode($pdfContent);

//     // Pass the encoded PDF content to the view
//     return view('preview-pdf', compact('base64Pdf'));
// }




}
