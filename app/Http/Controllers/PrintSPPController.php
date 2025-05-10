<?php

namespace App\Http\Controllers;

use App\Models\Berkas;
use App\Models\Counterno;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Filament\Notifications\Notification;

class PrintSPPController extends Controller
{
    public function cetakSPP($id)
    {
        $berkas = Berkas::findOrFail($id); // Ambil data berdasarkan ID

        // Pastikan ada view Blade untuk template PDF
        $pdf = Pdf::loadView('spp', ['berkas' => $berkas]);

        // Unduh PDF atau tampilkan di browser
        return $pdf->stream('Surat_Penerimaan_Permohonan.pdf');
    }
    public function cetakSBP($id)
    {
        $berkas = Berkas::findOrFail($id); // Ambil data berdasarkan ID

        //Cek nokwit
        $nokwit = $berkas->nokwit;
        if (!$nokwit) {
            $nokwit = Counterno::noCounter('NOMOR-KWIT', date('Y'));
            $data['nokwit'] = str_pad($nokwit, '5', '0', STR_PAD_LEFT) . '/KHP-DDS/' . date('Y');
            $data['tglkwit'] = now();

            $berkas->nokwit = $data['nokwit'];
            $berkas->tglkwit = $data['tglkwit'];
            $berkas->save();
            Notification::make()->success()->title('Nomor Kwitansi Saved')->send();
        }

        // Pastikan ada view Blade untuk template PDF
        $pdf = Pdf::loadView('sbp', ['berkas' => $berkas]);

        // Unduh PDF atau tampilkan di browser
        return $pdf->stream('Surat_Bukti_Pembayaran.pdf');
    }
}
