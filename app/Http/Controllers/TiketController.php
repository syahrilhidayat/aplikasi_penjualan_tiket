<?php

namespace App\Http\Controllers;

use App\Tiket;
use App\Kategori;
use App\Http\Requests\TiketRequest;

class TiketController extends Controller
{
    public function index()
    {
        return view('tiket.index', [
            'tiket'     => Tiket::latest()->paginate(10)
        ]);
    }
    public function create()
    {
        return view('tiket.create', [
            'kategori'  => Kategori::get()
        ]);
    }
    public function store(TiketRequest $request)
    {
        $attr = request()->all();
        Tiket::create($attr);
        session()->flash('success', 'Data Tiket Berhasil DiTambahkan');
        return redirect('tiket');
    }
    public function edit(Tiket $item)
    {
        return view('tiket.edit', compact('item'), [
            'kategori'  => Kategori::get()
        ]);
    }
    public function update(TiketRequest $request, Tiket $item)
    {
        $attr = request()->all();
        $item->update($attr);
        session()->flash('success', 'Data Berhasil Tiket DiUpdate');
        return redirect('tiket');
    }
    public function destroy(Tiket $item)
    {
        $item->delete();
        session()->flash('success', 'Data Tiket Berhasil Dihapus');
        return redirect('tiket');
    }
}
