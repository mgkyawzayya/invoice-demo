<?php

namespace App\Http\Controllers;

use function Spatie\LaravelPdf\Support\pdf;
use Spatie\LaravelPdf\Enums\Format;
use Spatie\Browsershot\Browsershot;

class DownloadInvoiceController
{
    public function index()
    {
        return pdf()
            // ->withBrowsershot(function (Browsershot $browsershot) {
            //     $browsershot->setNodeBinary('/home/robot/.nvm/versions/node/v20.11.1/bin/node');
            //     $browsershot->setNpmBinary('/home/robot/.nvm/versions/node/v20.11.1/bin/npm');
            // })
            ->view('pdf.ios')
            ->margins(5, 1, 10, 1)
            ->format(Format::A4)
            ->name('invoice-android.pdf');
    }
}
