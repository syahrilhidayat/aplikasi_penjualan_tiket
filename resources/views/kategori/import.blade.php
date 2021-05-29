@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                    Import Data Kategori
                    </div>
                        <div class="card-body">
                            <form action="/kategori/store_data" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="nama_kategori">Import Data</label>
                                    <input type="file" name="file" class="form-file">
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