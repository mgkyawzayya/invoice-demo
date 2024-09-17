<?php

namespace App\Http\Controllers;

use function Spatie\LaravelPdf\Support\pdf;

class DownloadInvoiceController
{
    public function index()
    {
        return pdf()
            ->view('pdf.invoice')
            ->name('invoice-android.pdf');
    }
}
