<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable = ['tiket_id', 'qty'];

    public function tiket()
    {
        return $this->belongsTo(Tiket::class);
    }
}
