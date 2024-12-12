<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index()
    {
        return response("Downloading file");
    }

    public function downloadInvoice($invoiceId, $type="PDF")
    {
        return response("Downloading file {$type} invoice In {$invoiceId}");
    }

    public function error()
    {
        return response("error", 404);
    }
}
