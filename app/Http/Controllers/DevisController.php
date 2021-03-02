<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Order_Service;
use Illuminate\Http\Request;
use DB;
use PDF;
class DevisController extends Controller
{
    public function generate_PDF($id)
    {
        $order = DB::table('order__services')->where('id', '=', $id)->get();

        $data = [

            'amount' => $order->all()[0]->amount,
            'id' => $order->all()[0]->id,

            'date' => date('m/d/Y')

        ];
    dd($order->all()[0]->services);

        $pdf = PDF::loadView('devis.pdf', $data );


        return $pdf->download('itsolutionstuff.pdf');
    }
}
