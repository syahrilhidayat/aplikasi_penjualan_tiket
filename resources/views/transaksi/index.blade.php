@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        Form Transaksi
                    </div>
                    <div class="card-body">
                        <h4>Form Transaksi</h4>
                        <hr>
                        <table class="table table-bordered">
                            <form action="/transaksi/store" method="post">
                                @csrf
                                <tr>
                                    <th>
                                            <select name="tiket_id" id="tiket_id" class="form-control">
                                                <option selected disabled>Chosee One</option>
                                                @foreach ($tiket as $tiket)
                                                    <option value="{{$tiket->id}}">{{$tiket->nama_tiket}}</option>
                                                @endforeach
                                            </select>
                                            @error('tiket_id')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                            <input type="text" name="qty" id="qty" class="form-control">
                                        @error('qty')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <a href="/transaksi/update" class="btn btn-success">Selesai</a>
                                    </td>
                                </tr>
                            </form>
                        </table>
                        <div class="card-header bg-primary text-white">
                            Form Detail Transaksi
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered"> 
                                <tr>
                                    <th>No</th>
                                    <th>Nama Tiket</th>
                                    <th>Qty</th>
                                    <th>Harga Tiket</th>
                                    <th>Total</th>
                                    <th>Aksi</th>
                                </tr>
                                <?php $no=1; $subtotal=0; ?>
                                @foreach ($transaksi as $item)
                                    
                                <tr>
                                    <td> {{ $no }} </td>
                                    <td> {{ $item->tiket->nama_tiket }} </td>
                                    <td> {{ $item->qty }} </td>
                                    <td> @rupiah($item->tiket->harga_tiket) </td>
                                    <td> @rupiah($item->tiket->harga_tiket*$item->qty) </td>
                                    <td>
                                        <form action="/transaksi/{{$item->id}}/delete" method="post">
                                            @csrf
                                            @method('delete')
                                                <button type="submit" class="btn btn-sm btn-danger">Cancel</button>
                                        </form>
                                    </td>
                                </tr>
                                <?php $no++; ?>
                                <?php $subtotal = $subtotal+($item->tiket->harga_tiket*$item->qty) ?>
                                @endforeach
                                <tr>
                                    <td colspan="5"><strong>Sub Total</strong></td>
                                    <td> <strong>@rupiah($subtotal)</strong> </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection