@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4>Edit Data : <strong>{{ $item->nama_kategori }}</strong></h4>
                    </div>
                    <div class="card-body">
                        <form action="/kategori/{{$item->id}}/edit" method="post">
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <label for="nama_kategori">Nama Kategori</label>
                                <input type="text" name="nama_kategori" class="form-control" value="{{ $item->nama_kategori }}">
                            @error('nama_kategori')
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