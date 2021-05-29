@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary text-white"><i class="fa fa-address-book" aria-hidden="true"></i>Data Kategori Tiket</div>
                    <div class="card-body">
                        <a href="/kategori/create" class="btn btn-primary mb-3">Tambah Data</a>
                        <a href="/kategori/import_excel" class="btn btn-dark mb-3">Upload File</a>                                            
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kategori</th>
                                    <th colspan="2">Aksi</th>
                                </tr>
                            </thead>
                            <?php $no = 1; ?>
                            @foreach ($kategori as $item)                                
                            <tbody>
                                <tr>
                                    <td>{{ $no }}</td>
                                    <td>{{ $item->nama_kategori }}</td>
                                    <td><a href="/kategori/{{$item->id}}/edit" class="btn btn-sm btn-success">Edit</a></td>
                                    <td>
                                        <form action="/kategori/{{$item->id}}/delete" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                            <?php $no++; ?>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
