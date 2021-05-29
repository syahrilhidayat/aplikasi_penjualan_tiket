<?php

namespace App\Http\Controllers;

use App\Exports\LaporanExport;
use Illuminate\Http\Request;
use App\Models\Transaksi;
use PDF;

class LaporanController extends Controller
{
    public function index()
    {
        return view('laporan.index', [
            'transaksi'     => Transaksi::where('status', 1)->get()
        ]);
    }
    public function cetak_pdf()
    {
        $laporan =  Transaksi::where('status', 1)->get();
        $pdf = PDF::loadView('laporan.laporan_pdf', compact('laporan'));
        return $pdf->download('Laporan-Penjualan.pdf');
    }
    public function cetak_excel()
    {
        return (new LaporanExport)->download('Laporan_excel.xlsx');
    }
}
