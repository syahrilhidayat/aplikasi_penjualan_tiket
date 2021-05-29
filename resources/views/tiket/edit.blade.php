@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4>Tambah Data Tiket</h4>
                    </div>
                    <div class="card-body">
                        <form action="/tiket/{{ $item->id }}/edit" method="post">
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <label for="nama_tiket">Nama Tiket</label>
                                <input type="text" name="nama_tiket" class="form-control" value="{{ $item->nama_tiket }}">
                                @error('nama_tiket')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="jenis_tiket">Jenis Tiket</label>
                                <input type="text" name="jenis_tiket" class="form-control" value="{{ $item->jenis_tiket }}">
                                @error('jenis_tiket')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="kategori_id">Kategori Tiket</label>
                                <select name="kategori_id" id="kategori_id" class="form-control">
                                    <option selected disabled>Chosee One</option>
                                    @foreach ($kategori as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                                    @endforeach
                                </select>
                                @error('kategori_id')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="jumlah_tiket">Jumlah Tiket</label>
                                <input type="text" name="jumlah_tiket" class="form-control" value="{{ $item->jumlah_tiket }}">
                                @error('jumlah_tiket')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="harga_tiket">harga Tiket</label>
                                <input type="text" name="harga_tiket" class="form-control" value="{{ $item->harga_tiket }}">
                                @error('harga_tiket')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection