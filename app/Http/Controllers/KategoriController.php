<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use App\Http\Requests\KategoriRequest;
use Excel;
use App\Imports\KategoriImport;

class KategoriController extends Controller
{
    public function index()
    {
        return view('kategori.index', [
            'kategori'      => Kategori::latest()->paginate(10)
        ]);
    }
    public function create()
    {
        return view('kategori.create');
    }
    public function store(KategoriRequest $request)
    {
        $attr = request()->all();
        Kategori::create($attr);
        session()->flash('success', 'Data Kategori Berhasil Ditambahkan');
        return redirect('kategori');
    }
    public function edit(Kategori $item)
    {
        return view('kategori.edit', compact('item'));
    }
    public function update(KategoriRequest $request, Kategori $item)
    {
        $attr = request()->all();
        $item->update($attr);
        session()->flash('success', 'Data Berhasil Diubah');
        return redirect('kategori');
    }
    public function destroy(Kategori $item)
    {
        $item->delete();
        session()->flash('success', 'Data Berhasil Dihapus');
        return redirect('kategori');
    }
    public function import_excel()
    {
        return view('kategori.import_excel');
    }
    public function upload_excel(Request $request)
    {
        $this->validate($request, [
            'file'      => 'required|mimes:xls,xlsx'
        ]);
        if ($request->File('file')) {
            $file = $request->file('file');
            Excel::import(new KategoriImport, $file);
            return redirect('kategori')->with('success', 'Data Baerhasil DiUpload');
        }
        return redirect('kategori')->with('success', 'Data Baerhasil DiUpload');
    }
}
