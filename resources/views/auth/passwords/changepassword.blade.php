@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4>Ganti Password Account</h4>
                    </div>
                    <div class="card-body">
                        <form action="/tiket/store" method="post">
                            <div class="form-group">
                                <label for="old_password">Password Lama</label>
                                <input type="password" name="old_password" id="old_password" class="form-control">
                            </div>
                            <div class="form-group">
                            <label for="password">Password Baru</label>
                            <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">        
                                <label for="confirmation_password">Konfirmasi Password</label>
                                <input type="password" name="confirmasi_password" id="change_password" class="form-control">
                            </div>
                           <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection