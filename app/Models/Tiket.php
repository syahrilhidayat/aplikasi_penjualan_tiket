<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    protected $fillable = [
        'nama_tiket',
        'kategori_id',
        'jenis_tiket',
        'jumlah_tiket',
        'harga_tiket'
    ];
    //relaso ke tabel kategori
    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
    //relasi ke tabel transaksi
    public function transaksis()
    {
        return $this->hasMany(Transaksi::class);
    }
}
