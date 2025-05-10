<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Layangukur;
use Illuminate\Http\Request;

class SUPDFController extends Controller
{
    public function viewsupdf()
    {
        $layangukurs = Layangukur::all()->sortBy('nomor');
        $data = [
            'date' => date('d-m-Y'),
            'layangukurs' => $layangukurs

        ];
        $dt = strtotime(date(now()));
        // dd('su' . $dt . '.pdf');

        $pdf = PDF::loadView('suratukurPDF', $data);

        // return $pdf->download('suratukur.pdf');
        return $pdf->stream('su' . $dt . '.pdf');
    }
}
