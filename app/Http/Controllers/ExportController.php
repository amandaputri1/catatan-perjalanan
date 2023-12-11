<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Catatan;

class ExportController extends Controller
{
    //
    public function cetakpdf( Catatan $catatan)
    {
        $catatan = Catatan::all();
        $pdf = PDF::loadView('catatan.pdf', compact('catatan'))->output();
    
        return response($pdf, 200)
        ->header('Content-Type', 'application/pdf')
        ->header('Content-Disposition', 'attachment; filename="pedulidiri.pdf');
    }
}
