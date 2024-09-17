<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DownloadInvoiceController;

Route::get('/', [DownloadInvoiceController::class, 'index']);
