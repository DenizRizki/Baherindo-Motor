<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class mobilbaherindo extends Model
{
      protected $fillable = [
        "nama_mobil",
        "harga_mobil",
        "tahun_mobil",
        "km_mobil",
        "gambar_mobil"
    ];
}
