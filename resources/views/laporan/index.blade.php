@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4>Laporan Penjualan Tiket</h4>
                    </div>
                    <div class="card-body">
                        <h4>Laporan Penjualan Tiket</h4>
                        <hr>
                        <div class="d-flex justify-content-end mb-2">
                            <a href="/laporan/cetak_pdf" class="btn btn-danger mr-2">Download PDF</a>
                            <a href="/laporan/excel" class="btn btn-success">Download Excel</a>
                        </div>
                        <table class="table table-bordered">
                            <tr>
                                <th>No</th>
                                <th>Nama Tiket</th>
                                <th>Qty</th>
                                <th>Harga Tiket</th>
                                <th>Total</th>
                            </tr>
                            <?php $no=1; $subtotal=0;  ?>
                            @foreach ($transaksi as $item)
                            <tr>
                                <td>{{ $no }}</td>
                                <td> {{ $item->tiket->nama_tiket }} </td>
                                <td> {{ $item->qty }} </td>
                                <td>  @rupiah($item->tiket->harga_tiket) </td>
                                <td> @rupiah($item->tiket->harga_tiket * $item->qty) </td>
                            </tr>
                            <?php $no++ ?>
                            <?php $subtotal = $subtotal+($item->tiket->harga_tiket * $item->qty) ?>
                            @endforeach
                            <tr>
                                <td colspan="4"><strong>Sub Total</strong></td>
                                <td><strong>@rupiah($subtotal)</strong></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection