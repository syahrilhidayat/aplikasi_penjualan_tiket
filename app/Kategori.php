<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $fillable = ['nama_kategori'];

    public function tikets()
    {
        return $this->hasMany(Tiket::class);
    }
}
