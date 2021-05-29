@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4>Data Tiket</h4>
                    </div>
                    <div class="card-body">
                        <a href="/tiket/create" class="btn btn-primary mb-2">Tambah Data</a>
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Tiket</th>
                                    <th>Jenis Tiket</th>
                                    <th>Kategori Tiket</th>
                                    <th>Jumlah Tiket</th>
                                    <th>Harga Tiket</th>
                                    <th colspan="2">Aksi</th>
                                </tr>
                            </thead>
                            <?php $no=1; ?>
                            @foreach ($tiket as $item)
                            <tbody>
                                <tr>
                                    <td> {{ $no }} </td>
                                    <td> {{ $item->nama_tiket }} </td>
                                    <td> {{ $item->jenis_tiket }} </td>
                                    <td> {{ $item->kategori->nama_kategori }} </td>
                                    <td> {{ $item->jumlah_tiket }} </td>
                                    <td> @rupiah($item->harga_tiket)</td>
                                    <td>
                                        <a href="/tiket/{{$item->id}}/edit" class="btn btn-sm btn-success">Edit</a>
                                    </td>
                                    <td>
                                        <form action="/tiket/{{$item->id}}/delete" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                            <?php $no++ ?>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection