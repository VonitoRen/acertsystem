<?php

namespace App\Http\Controllers;

use App\Models\AccreditationCertificationModel;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Support\Facades\View;

class AcPdfController extends Controller
{
    
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
    return view('preview-ac-pdf', compact('base64Pdf'));
}
}
