<?php

namespace App\Http\Controllers;

use function Spatie\LaravelPdf\Support\pdf;
use Spatie\LaravelPdf\Enums\Format;

class DownloadInvoiceController
{
    public function index()
    {
        return pdf()
            ->view('pdf.invoice')
            ->format(Format::A4)
            ->name('invoice-android.pdf');
    }
}
