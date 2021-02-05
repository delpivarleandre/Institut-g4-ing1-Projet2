<?php

namespace App\Http\Controllers;

use App\Models\Devis;
use Illuminate\Http\Request;
use PDF;

class DevisController extends Controller
{
    public function showDevis(){
        $devis = Devis::all();
        return view('devis.index', compact('devis'));
      }

      // Generate PDF
    public function createPDF() {
        // retreive all records from db
        $data = Devis::all();
  
        // share data to view
        view()->share('devis',$data);
        $pdf = PDF::loadView('devis.pdf_view', $data);
  
        // download PDF file with download method
        return $pdf->download('pdf_file.pdf');
      }
}
