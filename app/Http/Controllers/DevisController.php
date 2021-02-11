<?php

namespace App\Http\Controllers;

use App\Models\Devis;
use App\Models\Service;
use Illuminate\Http\Request;
use PDF;

class DevisController extends Controller
{
      public function index()
      {
              $devis = Devis::all();
      
              return view('devis.index', compact('devis'));
      }

      public function create()
      {
        return view('devis.ajouter');

      } 

      public function store(Request $request)
      {
          $data= $request->validate([
              'qty' =>'required|min:1',
              'time'=>'required|min:1',
              'size'=>'required|min:1'
          ]);
  
          Devis::create($data); 
  
          return redirect()->route('devis.index', $request);
      }

      public function downloadPDF($id) {
        $devi = Devis::find($id);
        $pdf = PDF::loadView('devis.pdf_view', compact('devi'));
        
        return $pdf->download('devis.pdf');
  }
}
