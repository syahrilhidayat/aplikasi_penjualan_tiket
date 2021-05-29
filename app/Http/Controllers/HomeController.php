<?php

namespace App\Http\Controllers;

use App\Transaksi;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $transaksi = DB::table('transaksis')
            ->join('tikets', 'transaksis.tiket_id', '=', 'tikets.id')
            ->join('kategoris', 'tikets.kategori_id', '=', 'kategoris.id')
            ->where('status', '=', 1)
            ->get();
        return view('home', compact('transaksi'));
    }
}
