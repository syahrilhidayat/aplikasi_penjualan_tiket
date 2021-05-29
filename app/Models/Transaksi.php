<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{

    public function tiket()
    {
        return $this->belongsTo(Tiket::class);
    }

    protected $fillable = ['tiket_id', 'qty', 'status'];
}
