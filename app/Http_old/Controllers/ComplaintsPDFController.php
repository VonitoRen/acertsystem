<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Support\Facades\View;
use App\Models\ComplaintsCertificationModel;

class ComplaintsPDFController extends Controller
{
    
public function previewPdf($id)
{
    // Get the specific certification record by ID
    $complaintsCert = ComplaintsCertificationModel::findOrFail($id);

    // URL of the image
    $imageUrl = 'https://resaadvocates.com/wp-content/uploads/2019/06/prc-logo.png';

    // $imageUrl = '/img/image001.png';
    // Render the view into HTML, passing the certification record and image URL
    $html = view('complaints', compact('complaintsCert', 'imageUrl'))->render();

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
}
