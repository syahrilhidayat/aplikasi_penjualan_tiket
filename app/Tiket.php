<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    protected $fillable = [
        'nama_tiket',
        'jenis_tiket',
        'kategori_id',
        'jumlah_tiket',
        'harga_tiket'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
    public function transaksis()
    {
        return $this->hasMany(Transaksi::class);
    }
}
