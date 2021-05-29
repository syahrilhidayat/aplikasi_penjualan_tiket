<?php

namespace App\Http\Controllers;

use App\Transaksi;
use App\Tiket;
use App\Http\Requests\TransaksiRequest;

class TransaksiController extends Controller
{
    public function index()
    {
        return view('transaksi.index', [
            'transaksi'     => Transaksi::where('status', '=', 0)->get(),
            'tiket'         => Tiket::get()
        ]);
    }
    public function store(TransaksiRequest $request)
    {
        $attr = request()->all();
        Transaksi::create($attr);
        return redirect('transaksi');
    }
    public function update()
    {
        $attr = Transaksi::where('status', '=', 0);
        $attr->update(['status' => 1]);
        return redirect('transaksi');
    }
    public function destroy(Transaksi $item)
    {
        $item->delete();
        return redirect('transaksi');
    }
}
