<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CertificateController extends Controller
{
    public function generateCertificate()
    {
        $recipient = 'John Doe';
        $date = date('Y-m-d');
        
        return view('certificate', compact('recipient', 'date'));
    }
}
