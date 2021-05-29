<?php

namespace App\Exports;

use App\Transaksi;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class LaporanExport implements FromView
{
    use Exportable;
    public function view(): View
    {
        return view('laporan.laporan_excel', [
            'laporan' => Transaksi::where('status', 1)->get()
        ]);
    }
}
