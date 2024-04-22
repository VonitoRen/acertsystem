<?php

namespace App\Http\Controllers;

use App\Models\PicCorCertificationModel;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Support\Facades\View;

class PiccorPDFController extends Controller
{
    public function previewPdf($id)
    {
        // Get the specific certification record by ID
        $appearanceCert = PicCorCertificationModel::findOrFail($id);

        // Render the view into HTML, passing the certification record
        $html = view('piccor', compact('appearanceCert'))->render();

        // Configure Dompdf
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true); // Enable HTML5 parser
        $options->set('isRemoteEnabled', true); // Enable remote file access

        // Instantiate Dompdf with options
        $pdf = new Dompdf($options);

        // Load HTML content with specified encoding
        $pdf->loadHtml(mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8'));

        // (Optional) Set paper size and orientation
        $pdf->setPaper('A4', 'portrait');

        // Render PDF (errors are stored in $pdf->errors)
        $pdf->render();

        // Get the PDF content as a string
        $pdfContent = $pdf->output();

        // Encode the PDF content
        $base64Pdf = base64_encode($pdfContent);

        // Pass the encoded PDF content to the view
        return view('preview-piccor-pdf', compact('base64Pdf'));
    }
}
